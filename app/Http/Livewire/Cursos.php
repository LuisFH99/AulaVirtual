<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Estudiante;
use App\Models\Matricula;
use Illuminate\Support\Facades\Auth;

class Cursos extends Component
{
    public $aux = 0;

    public function render()
    {
        $categorias = Categoria::all();
        $estudiante = Estudiante::where('persona_id', auth()->user()->personas_id)->first();
        $allmatriculauser = Matricula::where('estudiantes_id', $estudiante->id)->get();
        return view('livewire.cursos.view', compact('categorias', 'allmatriculauser'));
    }

    public function SeleccionarCategoria($dato)
    {
        $this->aux = $dato;
    }
}
