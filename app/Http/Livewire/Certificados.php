<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Publicacion;
use Livewire\Component;

class Certificados extends Component{

    public $persona_id,$curso_id;
    public $cursos;
    public function render(){
        
        //retornando matriculas del estudiante
        if ($this->curso_id == 0) {
            $matricula = Matricula::where('estudiantes_id',$this->getEstudiante())->first();            

        }else{
            $matricula = Matricula::where('estudiantes_id',$this->getEstudiante())->where('publicacion_id',$this->getPublicacion())->first();            
        }
        
        //retornando lista de cursos
        $this->cursos = Matricula::where('estudiantes_id',$this->getEstudiante())->get();
        
        return view('livewire.certificados', compact('matricula'));
    }

    public function getEstudiante(){
        //retornando id del estudiante
        $this->persona_id = auth()->user()->personas_id; 
        $estudiante = Estudiante::firstWhere('persona_id',$this->persona_id);
        $estudiante_id = $estudiante->id;

        return $estudiante_id;
    }

    public function getPublicacion(){
        //retornando id de la publicacion
        $publicacion = Publicacion::firstWhere('cursos_id',$this->curso_id);
        $publicacion_id = $publicacion->id;

        return $publicacion_id;
    }

    public function validar($id){
        Matricula::where('id',$id)->update(['response'=>1]); 
        #dd($matricula);
    }


}


 