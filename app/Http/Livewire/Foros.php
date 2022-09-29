<?php

namespace App\Http\Livewire;

use App\Models\Foro;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Foros extends Component{
    use WithPagination;
    public $id_foro,$fech_ini,$descripcion,$modulo_id;
    protected $paginationTheme = "bootstrap";

    public function mount(){
        $this->id_foro = request('idforo');
    }

    public function render(){
        $this->fech_ini=Carbon::now()->locale('es')->translatedFormat('l d \d\e F \d\e\l Y');

        $foro = Foro::findOrFail($this->id_foro);
        $this->modulo_id      = $foro->modulo_id;
        $this->publicacion_id = $foro->publicacion_id;

        $respuestas = Foro::where('foro_id',$this->id_foro)->orderby('id','desc')->paginate(10);

        return view('livewire.foros.view',compact('foro','respuestas'));
    }

    public function getUser(){
        $users_id=auth()->user()->id;
        return $users_id;
    }

    public function addForo(){
        $rules    = ['descripcion'          => "required"];
        $messages = ['descripcion.required' => 'Campo requerido'];    
        $this->validate($rules,$messages);
        Foro::Create(
        ['publicacion_id' => $this->publicacion_id,
        'modulo_id'       => $this->modulo_id,
        'users_id'        => $this->getUser(),
        'descripcion'     => $this->descripcion,
        'foro_id'         => $this->id_foro
        ]); 

        $this->limpiar();
    }
    
    // public function edit($id){
    //     $this->limpiar();
    //     $foro = Foro::findOrFail($id); 
    //     $this->descripcion=$foro->descripcion;
    //     $this->dispatchBrowserEvent('show-add');
    // }

    // public function update(){
    //     $rules    = ['descripcion'          => "required"];
    //     $messages = ['descripcion.required' => 'Campo requerido'];    
    //     $this->validate($rules,$messages);
    //     $foro=Foro::find($this->id_foro);
    //     $foro->update(['descripcion'     => $this->descripcion]); 
    // }

    public function limpiar(){
        // $this->reset();
        $this->descripcion = null;
        $this->resetValidation();
    }

    public function updatingSearch(){
        $this->resetPage();
    } 


}
