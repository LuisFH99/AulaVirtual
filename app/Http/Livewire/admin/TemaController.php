<?php

namespace App\Http\Livewire\Admin;

use App\Models\Modulo;
use App\Models\Publicacion;
use App\Models\RecursosModulo;
use App\Models\Tema;
use Livewire\Component;

class TemaController extends Component{
    public $id_tema, $descripcion, $acceso, $fecha, $modulos_id, $tema_id, $temas,$title,$publicacion_id;
    protected $listeners=['deleteRow' => 'delete'];

    public function render() {
        $this->modulos_id = (session()->get('idmodulo'));
        $modulos=Modulo::findOrFail($this->modulos_id);
        $this->title=$modulos->nombre;
        $this->tema_id=$modulos->id;
        $this->publicacion_id=$modulos->publicacion_id;
        $publicaciones=Publicacion::where('id',$this->publicacion_id)->get();
        $this->temas=Tema::where('modulos_id',$this->tema_id)->get();
        return view('livewire.admin.temas.view',compact('modulos','publicaciones'));
    }

    public function addNew(){
        $this->dispatchBrowserEvent('show-add');
        $this->limpiar();
    }

    public function save(){
        //validaciones
        $rules = [
            'descripcion' => "required|unique:temas,descripcion,{$this->id_tema}",
            'fecha' => "required",
        ];

        $messages = [
            'descripcion.required' => 'Campo requerido',
            'descripcion.unique' => 'La descripcion ya existe',
            'fecha.required' => 'Campo requerido',
        ];
    
        $this->validate($rules,$messages);

        Tema::updateorCreate(['id' => $this->id_tema],
        ['descripcion' =>$this->descripcion,
        'fecha'=>$this->fecha,
        'modulos_id'=>$this->modulos_id
        ]); 

        $this->dispatchBrowserEvent('hide-add');
        $this->limpiar();
    }
 
    public function edit($id){
        $this->limpiar();
        $modulos = Tema::findOrFail($id); 
        $this->id_tema=$id;
        $this->descripcion=$modulos->descripcion;
        $this->fecha=$modulos->fecha;
        $this->dispatchBrowserEvent('show-add');
    }

    public function limpiar(){
        $this->reset();
        $this->resetValidation();
    }

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function delete (Tema $tema){
        if (RecursosModulo::Where('temas_id',"{$tema->id}")->count()>0){  
            $msj = [
                'modo' => 'bg-danger',
                'mensaje' => 'Error! El elemento esta en uso'
            ];
            $this->emit('alertaMisionVision', $msj); 
        } else {
            $msj = [
                'modo' => 'bg-success',
                'mensaje' => 'Eliminacion Exitosa'
            ];
            $tema->delete();
            $this->limpiar();
            $this->emit('notify', $msj); 
        }
    }
}
