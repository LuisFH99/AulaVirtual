<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Publicacion;
use Livewire\Component;

class Certificados extends Component{

    public $persona_id, $ruta,$matricula_id,$curso_id;
    public $cursos;
    public function render(){

        $this->persona_id = auth()->user()->personas->id; 
        $estudiante = Estudiante::find($this->persona_id);
        $estudiante_id = $estudiante->id;

        $matricula = Matricula::firstWhere('estudiantes_id',$estudiante_id);

        // $id_matricula = Certificado::firstWhere('matricula_id',);
        $id_matricula = $matricula->id;
        // $id_publicacion = $matricula->publicacion_id;
        $this->cursos = Matricula::where('id',$id_matricula)->get();
        // $certificado = Certificado::firstWhere('matricula_id',$id_matricula);
        $certificado = Certificado::where('matricula_id',$id_matricula)->get();
        // $this->ruta  = $certificado->ruta;
        // $publicacion = Publicacion::find($id_publicacion);
        // $this->ruta=$matricula->certificados->ruta;
        
        return view('livewire.certificados', compact('matricula','certificado'));
    }


    public function descargar($id){
        
    }

    public function ver($id){
        $this->limpiar();
        $matricula = Matricula::firstWhere('publicacion_id',$id);
        $id_matricula = $matricula->id;
        
        $certificado = Certificado::firstWhere('matricula_id',$id_matricula);
        $this->ruta  = $certificado->ruta;
    }

    public function limpiar(){
        $this->ruta='';
    }
}


 