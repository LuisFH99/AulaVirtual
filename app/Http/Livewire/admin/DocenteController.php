<?php

namespace App\Http\Livewire\Admin;

use App\Models\Docente;
use Livewire\Component;

class DocenteController extends Component
{
    public function render()
    {
        $docentes=Docente::all();
        return view('livewire.admin.docentes.view',compact('docentes'));
    }
}
