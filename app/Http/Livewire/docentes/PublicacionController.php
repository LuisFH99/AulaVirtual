<?php

namespace App\Http\Livewire\Docentes;

use Livewire\Component;
use App\Models\Publicacion;

class PublicacionController extends Component
{
    public $publicacion_id;

    public function mount()
    {
        $this->publicacion_id = request('idpublicacion');
    }

    public function render()
    {
        $publicacion=Publicacion::where('id',$this->publicacion_id)->first();
        return view('livewire.docentes.publicacion.view', compact('publicacion'));
    }
}
