<?php

namespace App\Http\Livewire;

use App\Models\Entregable;
use Livewire\Component;
use App\Models\Tarea;
use Livewire\WithFileUploads;

class Entregables extends Component
{
    public $tarea_id;
    public $matriculado_id;
    public $doc_entrega;
    use WithFileUploads;

    public function mount()
    {
        $this->tarea_id = request('idtarea');
        $this->matriculado_id = request('idmatricula');
    }

    public function render()
    {
        $tarea = Tarea::findOrFail($this->tarea_id);
        return view('livewire.entregables.view', compact('tarea'));
    }

    public function guardarEntregable()
    {
        $tarea = Tarea::findOrFail($this->tarea_id);
        $directoryname=$tarea->modulo->publicacion->curso->nombre."_".$tarea->modulo->publicacion->id;
        if ($this->doc_entrega) { 
            $filename=date("dmYhis")."-".$this->doc_entrega[0]->getClientOriginalName();
            $directory=$this->doc_entrega[0]->storeAS('public/entregables/'.$directoryname,$filename);
            $entegable=new Entregable();
            $entegable->ruta=$directory;
            $entegable->tarea_id=$this->tarea_id;
            $entegable->matricula_id=$this->matriculado_id;
            $entegable->save();
        }
        return redirect()->route('tarea.index',[$this->tarea_id]);
    }
}
