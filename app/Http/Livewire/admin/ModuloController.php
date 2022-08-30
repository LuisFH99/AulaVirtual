<?php

namespace App\Http\Livewire\Admin;

use App\Models\Curso;
use App\Models\Modulo;
use App\Models\Publicacion;
use App\Models\Tema;
use Livewire\Component;

class ModuloController extends Component{
    public $id_modulo, $link, $nombre, $publicacion_id, $curso;
    public $id_curso,$modulos_id,$temas;
    protected $listeners=['deleteRow' => 'delete'];

    public function render(){
        
        $this->publicacion_id = (session()->get('idpublicacion'));
        $this->temas=Tema::where('modulos_id',$this->modulos_id)->get();
        $publicacion=Publicacion::findOrFail($this->publicacion_id);
        $this->id_curso=$publicacion->cursos_id;
        $this->curso=Curso::where('id',$this->id_curso)->get();
        return view('livewire.admin.modulos.view',compact('publicacion'));
    }

    public function addNew(){
        $this->dispatchBrowserEvent('show-add');
        $this->limpiar();
    }

    public function save(){
        //validaciones
        $rules = [
            'nombre' => "required",
            'link' => "required",
        ];

        $messages = [
            'nombre.required' => 'Campo requerido',
            'link.required' => 'Campo requerido',
        ];
    
        $this->validate($rules,$messages);

        Modulo::updateorCreate(['id' => $this->id_modulo],
        ['nombre' =>$this->nombre,
        'link'=>$this->link,
        'publicacion_id'=>$this->publicacion_id
        ]); 

        if ($this->id_modulo > 0) {
            $msj = [
                'modo' => 'bg-success',
                'mensaje' => 'Actualizacion Exitosa'
            ];

        } else{
            $msj = [
                'modo' => 'bg-success',
                'mensaje' => 'Registro Exitoso'
            ];
        }
        $this->limpiar();
        $this->dispatchBrowserEvent('hide-add');
        $this->emit('notify', $msj); 
    }
 
    public function edit($id){
        $this->limpiar();
        $modulos = Modulo::findOrFail($id); 
        $this->id_modulo=$id;
        $this->nombre=$modulos->nombre;
        $this->link=$modulos->link;
        $this->dispatchBrowserEvent('show-add');
    }

    public function delete (Modulo $modulo){

        if (Tema::Where('modulos_id',"{$modulo->id}")->count()>0){  
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
            $modulo->delete();
            $this->limpiar();
            $this->emit('notify', $msj); 
        }
    }

    public function limpiar(){
        $this->reset();
        $this->resetValidation();
    }

    public function updatingSearch(){
        $this->resetPage();
    } 

    public function getTemas($id){
        $this->modulos_id=$id;
        session(['idmodulo' => $id]);
    }

    public function temas(){
        return redirect()->route('admin.temas.index');
    }
}
