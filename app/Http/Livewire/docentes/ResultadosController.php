<?php

namespace App\Http\Livewire\Docentes;

use App\Models\Matricula;
use App\Models\Resultados;
use Livewire\Component;

class ResultadosController extends Component
{
    public $datos;
    public function allresult()
    {
        $resultados = array();
        $matriculados = Matricula::where('publicacion_id', session()->get("idpublicacion"))->get();
        foreach ($matriculados as $matriculado) {
            $datastudent = array();
            $notas = $this->allintentos($matriculado->id);
            $datastudent = ["nombres" => $matriculado->estudiante->datos->fullname(), "notas" => $notas, "condicion" => $notas["calificacion"] >= 11 ? "Aprobado" : "Desaprobado"];
            array_push($resultados, $datastudent);
        }

        return $resultados;
    }
    public function allintentos($matriculaid)
    {
        $notas = ["intento1" => null, "intento2" => null, "intento3" => null, "calificacion" => 0];
        $results = Resultados::where('examen_id', session()->get("idexamen"))->where('matricula_id', $matriculaid)->get();

        if (!$results) {
            return $notas;
        }

        foreach ($results as $key => $result) {
            $nota = 0;
            foreach ($result->respuestas as $respuesta) {
                $nota += $respuesta->puntaje;
                if ($nota > $notas["calificacion"]) {
                    $notas = array_replace($notas, ["intento" . ($key + 1) => $nota, "calificacion" => $nota]);
                }
                $notas = array_replace($notas, ["intento" . ($key + 1) => $nota]);
            }
        }

        return $notas;
    }

    public function render()
    {
        $this->datos=session()->get("tipo");
        $resultados = $this->allresult();
        return view('livewire.docentes.resultado.view', compact("resultados"));
    }
}
