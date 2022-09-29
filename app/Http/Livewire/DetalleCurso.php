<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use App\Models\Foro;
use App\Models\Publicacion;
use App\Models\Matricula;
use Livewire\Component;
use App\Models\Resultados;


class DetalleCurso extends Component
{
    public $publicacion_id;
    public $resultados;
    public $notas = ["intento1" => null, "intento2" => null, "intento3" => null];
    public function mount()
    {
        $this->publicacion_id = request('idpublicacion');
    }

    public function render(){
        $foros = Foro::general()->get(); 
        $publicacion = Publicacion::where('id', $this->publicacion_id)->first();
        $exmenfinal = $publicacion->examen->where('is_final', 1)->first();
        return view('livewire.detallecurso.view', compact('publicacion', 'exmenfinal','foros'));
    }

    public function verResultados($idExamen)
    {
        $this->reset(['notas']);
        $estudiante = Estudiante::where('persona_id', (auth()->user()->personas_id))->first();
        $matricula = Matricula::select('id')->where('estudiantes_id', $estudiante->id)->where('publicacion_id', $this->publicacion_id)->first();
        $results = Resultados::where('examen_id', $idExamen)->where('matricula_id', $matricula->id)->get();
        foreach ($results as $key => $result) {
            $nota = 0;
            foreach ($result->respuestas as $respuesta) {
                $nota += $respuesta->puntaje;
                $this->notas = array_replace($this->notas, ["intento" . ($key + 1) => $nota]);
            }
        }
        $this->dispatchBrowserEvent('show-add');
    }

    public function darExamen($idExamen)
    {
        $estudiante = Estudiante::where('persona_id', (auth()->user()->personas_id))->first();
        $matricula = Matricula::select('id')->where('estudiantes_id', $estudiante->id)->where('publicacion_id', $this->publicacion_id)->first();
        if (Resultados::where('examen_id', $idExamen)->where('matricula_id', $matricula->id)->count() < 3) {
            session(['idexamen' => $idExamen]);
            return redirect()->route('examen.index');
        } else {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'Ya realizaste 3 intentos'
            ];
            $this->emit('alertaSistema', $datos);
        }
    }
}
