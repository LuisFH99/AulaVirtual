<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Examen;
use App\Models\Matricula;
use App\Models\Modulo;
use App\Models\Resultados;
use Livewire\Component;

class CalificacionController extends Component
{
    public $curso;

    public function resultTest()
    {
        $resultados = array();
        $matriculados = Matricula::where('publicacion_id', session()->get("idpublicacion"))->get();
        foreach ($matriculados as $matriculado) {
            $datastudent = array();
            $notas = $this->calificationTest($matriculado->id);
            $datastudent = ["nombres" => $matriculado->estudiante->datos->fullname(), "examen" => $notas,"condicion" => $notas["promedio"] >= 11 ? "Aprobado" : "Desaprobado"];
            array_push($resultados, $datastudent);
        }
        // dd($resultados);
        return $resultados; 
        // $test_module = Examen::where('publicacion_id', 2)->orderBy("modulo_id")->get();
        // if ($test_module->whereNotNull("modulo_id")->count() > 0) {
        //     dd("Entro al if");
        // } else {
        //     dd("NO Entro al if");
        // }
        // $test_final=Examen::where('publicacion_id',session()->get("idpublicacion"))->where("is_final",1)->get();
        // foreach ($test_module as $key => $value) {
        //     # code...
        // }


    }

    public function calificationTest($matriculaid)
    {
        $notas = array();
        $alltests = Examen::where('publicacion_id', session()->get("idpublicacion"))->orderBy("modulo_id")->get();
        $allmodules = Modulo::where('publicacion_id', session()->get("idpublicacion"))->pluck('nombre', 'id')->toArray();

        $testmodules = $alltests->whereNotNull("modulo_id");
        if ($testmodules->count() > 0) {

            foreach ($testmodules as $testmodule) {
                $results = Resultados::where('examen_id', $testmodule->id)->where('matricula_id', $matriculaid)->get();
                if (!$results) {
                    return $notas;
                }
                $notas[$allmodules[$testmodule->modulo_id]] = $this->mayorNote($results);
            }
            $notas["promedio"]=$this->average($notas);
            return $notas;
        }
    }

    public function mayorNote($results)
    {
        $tmp = ["calificacion" => 0];
        foreach ($results as $key => $result) {
            $nota = 0;
            foreach ($result->respuestas as $respuesta) {
                $nota += $respuesta->puntaje;
                if ($nota > $tmp["calificacion"]) {
                    $tmp = array_replace($tmp, ["calificacion" => $nota]);
                }
            }
        }
        return $tmp["calificacion"];
    }

    public function average($notas){
        $total=0;
        foreach ($notas as $nota) {
            $total+=$nota;
        }
        return round(($total/count($notas)),0);

    }

    public function render()
    {
        $this->curso = session()->get("curso");
        $resultados = $this->resultTest();
        return view('livewire.docentes.calificacion.view',compact("resultados"));
    }
}
