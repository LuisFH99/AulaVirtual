<?php

namespace App\Http\Livewire;

use App\Models\Publicacion;
use Livewire\Component;

class DetalleCurso extends Component
{
    public $publicacion_id;

    public function mount(){
        $this->publicacion_id = request('idpublicacion');
    }

    public function render()
    {
        $publicacion=Publicacion::where('id',$this->publicacion_id)->first();
        return view('livewire.detallecurso.view',compact('publicacion'));
    }
}
