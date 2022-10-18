<?php

namespace App\Http\Livewire;

use App\Models\Certificado;
use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Publicacion;
use Livewire\Component;

class Vistacertificado extends Component{

    public $persona_id, $ruta,$curso,$certificado_id;
    public $cursos;

    public function mount(){
        $this->certificado_id = request('idcertificado');
    }
    
    public function render(){
        
        // $this->persona_id = auth()->user()->personas->id;
        // $estudiante = Estudiante::find($this->persona_id);
        // $estudiante_id = $estudiante->id;

        // $matricula = Matricula::firstWhere('estudiantes_id',$estudiante_id);
        // $id_matricula = $matricula->id;
        // $id_publicacion = $matricula->publicacion_id;

        $certificado = Certificado::find($this->certificado_id);
        $this->ruta  = $certificado->ruta;
        $this->curso=$certificado->matriculas->publicacion->curso->nombre;

        // $publicacion = Publicacion::find($id_publicacion);
        // $this->ruta=$matricula->certificados->ruta;

        return view('livewire.vistacertificado',compact('certificado'));
    }
}
