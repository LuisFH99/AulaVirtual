<?php

namespace App\Http\Livewire\Admin;

use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Persona;
use App\Models\Publicacion;
use App\Models\User;
use Livewire\Component;

class MatriculaController extends Component
{
    public $publicacion_id, $lista;
    public $vermodal = false;
    public $apellidos,$nombes,$dni,$correo,$celular,$fecha_naciemiento,$profesion;

    public function mount()
    {
        $this->publicacion_id = (session()->get('idpublicacion'));
    }
    public function render()
    {
        $matriculados = Matricula::where('publicacion_id', $this->publicacion_id)->get();
        $curso = Publicacion::findOrFail($this->publicacion_id)->curso->nombre;
        return view('livewire.admin.matricula.view', compact('matriculados', 'curso'));
    }

    public function abrirmodal()
    {
        $this->vermodal = true;
    }
    public function cancelar()
    {
        $this->vermodal = false;
    }

    public function limpiarForm(){
        $this->reset(['apellidos','nombes','dni','correo','celular','fecha_naciemiento','profesion']);
    }

    public function registrar()
    {
        // dd($this->apellidos,$this->nombes,$this->dni,$this->correo,$this->celular,$this->fecha_naciemiento,$this->profesion);
        $persona=new Persona();
        $persona->dni=$this->dni;
        $persona->nombres=$this->nombes;
        $persona->apellidos=$this->apellidos;
        $persona->correo=$this->correo;
        $persona->fechNac=$this->fecha_naciemiento;
        $persona->celular=$this->celular;
        $persona->save();

        $estudiante=new Estudiante();
        $estudiante->persona_id=$persona->id;
        $estudiante->profesion=$this->profesion;
        $estudiante->save();

        $matricular=new Matricula();
        $matricular->estudiantes_id=$estudiante->id;
        $matricular->publicacion_id=$this->publicacion_id;
        $matricular->save();

        $usuario=new User();
        $usuario->name=$persona->fullName();
        $usuario->email=$this->correo;
        $usuario->password=bcrypt($this->dni);
        $usuario->personas_id=$persona->id;
        $usuario->role='estudiante';
        $usuario->save();
        $usuario->assignRole('estudiante');
        $this->limpiarForm();

        // $persona->image=$this->profesion;        
        
    }
}
