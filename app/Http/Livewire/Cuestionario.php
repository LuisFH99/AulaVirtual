<?php

namespace App\Http\Livewire;

use App\Models\Estudiante;
use App\Models\Examen;
use App\Models\Matricula;
use App\Models\Resultados;
use Livewire\Component;

class Cuestionario extends Component
{
    public $publicacion_id;
    public $respuestas = [];

    public function render()
    {
        $examen = Examen::findOrFail(session()->get('idexamen'));
        // dd($examen->preguntas->shuffle());
        $this->publicacion_id = $examen->publicacion_id;
        return view('livewire.examen.view', compact('examen'));
    }
    public function sendTest()
    {
        $estudiante = Estudiante::where('persona_id', (auth()->user()->personas_id))->first();
        $matricula = Matricula::select('id')->where('estudiantes_id', $estudiante->id)->where('publicacion_id', $this->publicacion_id)->first();
        $resultado = new Resultados();
        $resultado->examen_id = session()->get('idexamen');
        $resultado->matricula_id = $matricula->id;
        $resultado->save();
        foreach ($this->respuestas as $respuesta) {
            $resultado->respuestas()->attach($respuesta);
        }
        return redirect()->route('detallecurso.index',[$this->publicacion_id]);
        // dd($this->respuestas);
    }
}
