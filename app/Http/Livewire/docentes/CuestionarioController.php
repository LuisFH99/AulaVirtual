<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Alternativa;
use App\Models\Examen;
use App\Models\Preguntas;
use App\Models\Resultados;
use Livewire\Component;


class CuestionarioController extends Component
{
    public $examenselect;
    public $vermodal = false;
    public $enunciado;
    public $aternativas = [];

    public function render()
    {
        $this->examenselect = Examen::findOrFail(session()->get('idexamen'));
        return view('livewire.docentes.cuestionario.view', ['examen' => $this->examenselect]);
    }

    public function viewModal()
    {
        if (Resultados::where('examen_id', $this->examenselect->id)->exists()) {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'El Examen ya fue realizado, ¡No se puede Agregar Preguntas!'
            ];
            $this->emit('alertaSistema', $datos);
            return 0;
        }
        $this->vermodal = true;
    }

    public function cancelar()
    {
        $this->reset([
            'vermodal'
        ]);
    }
    public function limpiarForm()
    {
        $this->reset(['enunciado', 'aternativas']);
    }

    public function addPregunta()
    {
        if (Resultados::where('examen_id', $this->examenselect->id)->exists()) {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'El Examen ya fue realizado, ¡No se puede Agregar Preguntas!'
            ];
            $this->emit('alertaSistema', $datos);
            return 0;
        }

        $question = new Preguntas();
        $question->pregunta = $this->enunciado;
        $question->examen_id = $this->examenselect->id;
        $question->save();
        foreach ($this->aternativas as $alternativa) {
            $alternative = new Alternativa();
            $alternative->respuesta = $alternativa['respuesta'];
            $alternative->puntaje = $alternativa['puntos'];
            $alternative->pregunta_id = $question->id;
            $alternative->save();
        }
        $datos = [
            'modo' => 'success',
            'mensaje' => 'Se Agrego una nueva pregunta al Examen'
        ];
        $this->emit('alertaSistema', $datos);
        $this->cancelar();
        $this->limpiarForm();
    }

    public function cambiarEstado($status)
    {
        Examen::where('id', $this->examenselect->id)->update(['is_visible' => $status == 0 ? 1 : 0]);
    }
    public function quitarPregunta($idpregunta)
    {

        if (Resultados::where('examen_id', $this->examenselect->id)->exists()) {
            $datos = [
                'modo' => 'error',
                'mensaje' => 'El Examen ya fue realizado, ¡No se puede Eliminar Preguntas!'
            ];
            $this->emit('alertaSistema', $datos);
        } else {
            Alternativa::where('pregunta_id', $idpregunta)->delete();
            Preguntas::destroy($idpregunta);
            $datos = [
                'modo' => 'success',
                'mensaje' => 'La pregunta se Elimino de forma correcta'
            ];
            $this->emit('alertaSistema', $datos);
        }
    }
}
