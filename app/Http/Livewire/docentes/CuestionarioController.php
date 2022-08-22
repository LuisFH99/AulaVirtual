<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Alternativa;
use App\Models\Examen;
use App\Models\Preguntas;
use Egulias\EmailValidator\Exception\AtextAfterCFWS;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class CuestionarioController extends Component
{
    public $examenselect;
    public $vermodal = false;
    public $enunciado;
    public $aternativas = [];

    public function render()
    {
        $this->examenselect = Examen::findOrFail(session()->get('idexamen')) ;
        return view('livewire.docentes.cuestionario.view', ['examen' => $this->examenselect]);
    }

    public function viewModal()
    {
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
        $this->reset(['enunciado', 'alternativa1', 'puntaje1', 'alternativa2', 'puntaje2', 'alternativa3', 'puntaje3', 'alternativa4', 'puntaje4']);
    }

    public function addPregunta()
    {

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

        $this->cancelar();
        $this->limpiarForm();
    }

    public function cambiarEstado($status)
    {
        Examen::where('id', $this->examenselect->id)->update(['is_visible' => $status == 0 ? 1 : 0]);
    }
    public function quitarPregunta($idpregunta){
        
        Alternativa::where('pregunta_id',$idpregunta)->delete();
        Preguntas::destroy($idpregunta);
    }
}
