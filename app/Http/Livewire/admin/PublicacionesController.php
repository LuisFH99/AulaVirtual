<?php

namespace App\Http\Livewire\Admin;

use App\Models\Curso;
use App\Models\Matricula;
use App\Models\Nivel;
use App\Models\Publicacion;
use App\Models\TipoPublicacion;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class PublicacionesController extends Component{
    use WithFileUploads;
    use WithPagination; 
    public $id_publicacion,$rutaimg, $nota_minima, $fecha_inicio, $fecha_fin, $fecha_inicio_matricula, $fecha_fin_matricula, $horas, $cursos_id, $niveles_id, $tipopublicacion_id,$rutaImg;
    Public $cursos,$niveles,$tipos;
    protected $listeners=['deleteRow' => 'delete'];
    protected $paginationTheme = 'bootstrap';


    
    public function render(){
        $this->cursos=Curso::orderBy('nombre', 'desc')->get();
        $this->niveles=Nivel::orderBy('nivel', 'desc')->get();
        $this->tipos=TipoPublicacion::orderBy('tipo', 'desc')->get();;
        $publicaciones = Publicacion::orderBy('fecha_fin', 'desc')->paginate(10);
        return view('livewire.admin.publicaciones.view', compact('publicaciones'));
    }

    public function addNew(){
        $this->dispatchBrowserEvent('show-add');
        $this->limpiar();
    }

    public function save(){
        //validaciones
        $rules = [
            // 'rutaimg' => "required|mimes:png,jpg,jpeg|max:3560",
            'nota_minima' => "required|numeric|max:20|min:1",
            'fecha_inicio'=>"required",
            'fecha_fin'=>"required|after_or_equal:fecha_inicio",
            'fecha_inicio_matricula'=>"required",
            'fecha_fin_matricula'=>"required|after_or_equal:fecha_inicio_matricula",
            'horas'=>"required",
            'cursos_id'=>"required",
            'niveles_id'=>"required",
            'tipopublicacion_id'=>"required",
        ];

        $messages = [
            'rutaimg.required' => 'Campo requerido',
            'rutaimg.mimes' => 'Formato no admitido',
            'rutaimg.max' => 'Capacidad maxima 3MB',
            'nota_minima.required' => 'Campo requerido',
            'nota_minima.max' => 'Valor invalido',
            'nota_minima.min' => 'Valor invalido',
            'fecha_inicio.required' => 'Campo requerido',
            'fecha_fin.required' => 'Campo requerido',
            'fecha_fin.after_or_equal' => 'Fecha invalida',
            'fecha_inicio_matricula.required' => 'Campo requerido',
            'fecha_fin_matricula.required' => 'Campo requerido',
            'fecha_fin_matricula.after_or_equal' => 'Fecha invalida',
            'horas.required' => 'Campo requerido',
            'cursos_id.required' => 'Campo requerido',
            'niveles_id.required' => 'Campo requerido',
            'tipopublicacion_id.required' => 'Campo requerido',
        ];
    
        $this->validate($rules,$messages);

        $conv=Publicacion::updateorCreate(['id' => $this->id_publicacion],
        [
        'rutaimg' =>$this->Rutaimg($this->rutaimg),
        'nota_minima'=>$this->nota_minima,
        'fecha_inicio'=>$this->fecha_inicio,
        'fecha_fin'=>$this->fecha_fin,
        'fecha_inicio_matricula'=>$this->fecha_inicio_matricula,
        'fecha_fin_matricula'=>$this->fecha_fin_matricula,
        'horas'=>$this->horas,
        'cursos_id'=>$this->cursos_id,
        'niveles_id'=>$this->niveles_id,
        'tipopublicacion_id'=>$this->tipopublicacion_id
        ]); 

        //creacion de imagenes

        if ($this->id_publicacion>0) {
            //modificar imagen
            if ($this->rutaimg) { 
                //encriptando nombre de la imagen
                $nombreImg = uniqid() . '_.' .$this->rutaimg->extension();
                //guardando imagen
                $this->rutaimg->storeAs('public/img',$nombreImg);

                //guardando ruta
                $rutaimg=$conv->rutaimg; 
                $conv->rutaimg=$this->Rutaimg($nombreImg);
                $conv->save();

                if ($rutaimg !=null) {
                    if (file_exists('storage/img'.$rutaimg)) {
                        unlink('storage/img'.$rutaimg);}
                }
            }
        } else {
            if ($this->rutaimg) {
                $filename = uniqid() . '_.' .$this->rutaimg->extension();
                $this->rutaimg->storeAs('public/img',$filename);
                $conv->rutaimg = $this->Rutaimg($filename);
                $conv->save();
            }
        }

        //creacion de alertas
        
        if ($this->id_publicacion > 0) {
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
        $publicaciones = Publicacion::findOrFail($id); 
        $this->id_publicacion=$id;
        $this->rutaimg=$publicaciones->rutaimg;
        $this->nota_minima=$publicaciones->nota_minima;
        $this->fecha_inicio=$publicaciones->fecha_inicio; 
        $this->fecha_fin=$publicaciones->fecha_fin; 
        $this->fecha_inicio_matricula=$publicaciones->fecha_inicio_matricula; 
        $this->fecha_fin_matricula=$publicaciones->fecha_fin_matricula; 
        $this->horas=$publicaciones->horas; 
        $this->cursos_id=$publicaciones->cursos_id; 
        $this->niveles_id=$publicaciones->niveles_id; 
        $this->tipopublicacion_id=$publicaciones->tipopublicacion_id;     
        $this->dispatchBrowserEvent('show-add');
    }

    public function delete (Publicacion $publicacion){

        if (Matricula::Where('publicacion_id',"{$publicacion->id}")->count()>0){  
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
            $publicacion->delete();
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

    public function matricula($idpublicacion){
        // dd($idpublicacion);

        session(['idpublicacion' => $idpublicacion]);

        return redirect()->route('admin.matricula.index');
    }

    public function modulos($id){
        session(['idpublicacion' => $id]);
        return redirect()->route('admin.modulos.index');
    }

    public function Rutaimg($name){
        $this->rutaImg = '/storage/img/'.$name;
        return $this->rutaImg;
    }
}
