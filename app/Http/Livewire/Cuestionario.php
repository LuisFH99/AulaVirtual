<?php

namespace App\Http\Livewire;

use App\Models\Examen;
use Livewire\Component;

class Cuestionario extends Component
{
    public $idexamen;
    public function mount()
    {
        $this->idexamen = Examen::findOrFail(session()->get('idexamen'));
    }
    public function render()
    {
        $examen=Examen::findOrFail(session()->get('idexamen'));
        return view('livewire.examen.view',compact('examen'));
    }
}
