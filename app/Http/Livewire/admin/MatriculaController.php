<?php

namespace App\Http\Livewire\Admin;

use App\Models\Docente;
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
    public $apellidos, $nombes, $dni, $correo, $celular, $fecha_naciemiento, $profesion;

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

    public function limpiarForm()
    {
        $this->reset(['apellidos', 'nombes', 'dni', 'correo', 'celular', 'fecha_naciemiento', 'profesion']);
    }

    public function registrar()
    {
        // dd($this->apellidos,$this->nombes,$this->dni,$this->correo,$this->celular,$this->fecha_naciemiento,$this->profesion);
        $persona = new Persona();
        $persona->dni = $this->dni;
        $persona->nombres = $this->nombes;
        $persona->apellidos = $this->apellidos;
        $persona->correo = $this->correo;
        $persona->fechNac = $this->fecha_naciemiento;
        $persona->celular = $this->celular;
        $persona->save();

        $estudiante = new Estudiante();
        $estudiante->persona_id = $persona->id;
        $estudiante->profesion = $this->profesion;
        $estudiante->save();

        $matricular = new Matricula();
        $matricular->estudiantes_id = $estudiante->id;
        $matricular->publicacion_id = $this->publicacion_id;
        $matricular->save();

        $usuario = new User();
        $usuario->name = $persona->fullName();
        $usuario->email = $this->dni;
        $usuario->password = bcrypt($this->dni);
        $usuario->personas_id = $persona->id;
        $usuario->role ="estudiante";
        $usuario->save();
        $usuario->assignRole('estudiante');
        $this->limpiarForm();

        $destinatario = $persona->correo; // "huaraz14@gmail.com"; 
        $asunto = "Registro en Aula Virtual de la FUNDASAM";
        $cuerpo = '<!DOCTYPE html>
                <html>
                <head>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <style>
                body {font-family: Arial, Helvetica, sans-serif;}
                button:hover {
                opacity: 0.8;
                }
                /* Extra styles for the cancel button */
                .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
                }
                /* Center the image and position the close button */
                .imgcontainer {
                text-align: center;
                margin: 24px 0 12px 0;
                position: relative;
                }
                img.avatar {
                width: 20%;
                }
                .container {
                padding: 16px;
                }
                
                /* Modal Content/Box */
                .modal-content {
                background-color: #fefefe;
                margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
                border: 1px solid #888;
                width: 80%; /* Could be more or less, depending on screen size */
                }
                </style>
                </head>
                <body>
                <div class="modal-content animate">
                <div class="imgcontainer">      
                <img src="https://fyhglobal.com/aulavirtual/img/fundasam.webp" alt="Avatar" class="avatar">
                </div>
                <div class="container" style="background-color:#2d529f">
                <center> <font style="color: #FFFFFF">ENTREGA DE CREDENCIALES DE ACCESO</font> </center>
                </div>
                <p style="padding:10px 15px">
                "Estimado ' . $persona->fullName() . ' Ha sido registrado en el Aula Virtual de la FUNDASAM con los siguientes datos:"
                </p>
                <div class="container">
                <label for="uname"><b>APELLIDOS Y NOMBRES</b></label>
                <input 
                style="width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;"
                type="text" value="' . $persona->fullName() . '" name="uname" disabled>
                <label for="psw"><b>USUARIO</b></label>
                <input
                style="width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;"
                type="text" value="' . $persona->dni . '" name="uname" disabled>
                <label for="psw"><b>CONTRASEÑA</b></label>     
                <input
                style="width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;"
                type="text" value="' . $persona->dni . '" disabled>        </div>
                <div class="container" style="background-color:#2d529f">
                <center> <font style="color: #FFFFFF">FUNDASAM </font> </center>
                </div>
                </div>
                </body>
                </html>';

        //para el envío en formato HTML 
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        //dirección del remitente 
        $headers .= "From: Administración FUNDASAM<lfactorh99@gmail.com>\r\n";

        mail($destinatario, $asunto, $cuerpo, $headers);

        // $persona->image=$this->profesion;        

    }

    public function savedocente(){
        $persona = new Persona();
        $persona->dni = $this->dni;
        $persona->nombres = $this->nombes;
        $persona->apellidos = $this->apellidos;
        $persona->correo = $this->correo;
        $persona->fechNac = $this->fecha_naciemiento;
        $persona->celular = $this->celular;
        $persona->save();

        $estudiante = new Docente();
        $estudiante->persona_id = $persona->id;
        $estudiante->especialidad = $this->profesion;
        $estudiante->save();
        $estudiante->docentepublicacion()->attach($this->publicacion_id);

        $usuario = new User();
        $usuario->name = $persona->fullName();
        $usuario->email = $this->dni;
        $usuario->password = bcrypt($this->dni);
        $usuario->personas_id = $persona->id;
        $usuario->role ="docente"; //'estudiante';
        $usuario->save();
        $usuario->assignRole('docente');
        $this->limpiarForm();
    }
}
