<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Docente;
use Illuminate\Support\Facades\Auth;

class Cursos extends Component
{
    public $aux = 0;

    public function render()
    {
        $role = Auth::user()->role;
        if (strcasecmp($role, "estudiante") == 0) {
            $categorias = Categoria::all();
            $estudiante = Estudiante::where('persona_id', auth()->user()->personas_id)->first();
            $allmatriculauser = Matricula::where('estudiantes_id', $estudiante->id)->get();
            return view('livewire.cursos.view', compact('categorias', 'allmatriculauser'));
        } elseif (strcasecmp($role, "docente") == 0) {
            $categorias = Categoria::all();
            $docente = Docente::where('persona_id', auth()->user()->personas_id)->first();
            return view('livewire.docentes.cursos.view', compact('categorias', 'docente'));
        }
    }

    public function SeleccionarCategoria($dato)
    {
        $this->aux = $dato;
    }
}
