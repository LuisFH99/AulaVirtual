<?php

namespace App\Http\Livewire;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithFileUploads;

class Perfiles extends Component{

    public $image,$personas_id;
    use WithFileUploads;

    public function render(){

        $usuarios =User::join('personas as p','p.id','users.personas_id')
        ->select('p.*')->where('users.id',auth()->user()->id)->get();

        return view('livewire.perfiles',['usuarios'=>$usuarios]);
    }

    public function save(){
        //validaciones 
        $rules=[
            'image' => "mimes:png,jpg,jpeg|max:3560",
        ];

        $messages =[
            'image.mimes' => 'Formato no admitido',
            'image.max' => 'Capacidad maxima 3MB',
        ];
        
        $this->validate($rules,$messages);


        $usuarios=User::find(auth()->user()->id);
        $this->personas_id=$usuarios->personas_id;
        $convocatoria=Persona::find($this->personas_id);

        if ($this->image) { 
            $filename= $this->image->getClientOriginalName();
            $this->image->storeAS('public/img',$filename);
            $imagename=$convocatoria->image;
            $convocatoria->image=$filename;
            $convocatoria->save();
            if ($imagename !=null) {
                if (file_exists('storage/img'.$imagename)) {
                    unlink('storage/img'.$imagename);}
            }
        }
    }
}
