<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Estudiante;

class EstudianteController extends Component
{
    // public $dni="hola";
    public $apellidos,$nombres,$correo,$fecha_nacimiento,$celular;

    public function render()
    {
        $estudiantes=Estudiante::all();
        // dd($estudiantes);
        return view('livewire.admin.estudiantes.view',compact('estudiantes'));
    }

    public function Guardar(){
        dd($this->dni);
        $this->dni=$this->apellidos;
    }
}
