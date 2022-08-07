<?php

namespace App\Http\Livewire;

use App\Models\Entregable;
use App\Models\Estudiante;
use App\Models\Matricula;
use App\Models\Tarea;
use Livewire\Component;

class Tareas extends Component
{
    public $tarea_id;

    public function mount()
    {
        $this->tarea_id = request('idtarea');
    }

    public function render()
    {
        $tarea = Tarea::findOrFail($this->tarea_id);
        $estudiante_id = Estudiante::where('persona_id',(auth()->user()->personas_id))->first();
        $matricula=Matricula::select('id')->where('estudiantes_id',$estudiante_id->id)->where('publicacion_id',$tarea->modulo->publicacion->id)->first();
        $entregable=Entregable::where('tarea_id',$this->tarea_id)->where('matricula_id',$matricula->id)->first();
        // dd($entregable);
        return view('livewire.tareas.view', compact('tarea','entregable','matricula'));
    }
}
