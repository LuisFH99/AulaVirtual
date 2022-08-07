<?php

namespace App\Http\Livewire\Admin;

use App\Models\Curso;
use Livewire\Component;

class CursoController extends Component
{
    public function render()
    {
        $cursos=Curso::orderBy('id','desc')->get();
        return view('livewire.admin.cursos.view',compact('cursos'));
    }
}
