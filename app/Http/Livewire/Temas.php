<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tema;

class Temas extends Component
{
    public $tema_id;
    public function mount(){
        $this->tema_id = request('idtema');
    }
    public function render()
    {
        $tema=Tema::where('id',$this->tema_id)->first();
        $linkvideo=$tema->videos[0]->ruta;
        
        return view('livewire.temas.view',compact('tema','linkvideo'));
    }
}
