<?php

namespace App\Http\Livewire\Docentes;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Docente;
use PhpOffice\PhpSpreadsheet\Calculation\Category;

class CursoController extends Component
{
    public $aux = 0;

    public function render()
    {
        
        $categorias = Categoria::all();
        $docente = Docente::where('persona_id', auth()->user()->personas_id)->first();
        //dd($docente->docentepublicacion);
        // $allmatriculauser = Matricula::where('estudiantes_id', $docente->id)->get();

        return view('livewire.docentes.cursos.view',compact('categorias','docente'));
    }

    public function SeleccionarCategoria($dato)
    {
        $this->aux = $dato;
    }
}
