<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foro extends Model{
    use HasFactory;

    protected $table = 'foro';
    
    protected $fillable = [
        'publicacion_id', 
        'modulo_id', 
        'users_id', 
        'descripcion', 
        'adjunto', 
        'foro_id'
    ];
    
    public $timestamps = true;

    public function modulos(){
        return $this->belongsTo(Modulo::class, 'modulo_id');
    }

    public function publicaciones(){
        return $this->belongsTo(Publicacion::class,'publicacion_id');
    }

    public function users(){
        return $this->belongsTo(User::class,'users_id');
    }


    public function ScopeGeneral($query){
        return $query->where('foro_id','>',0);
    }
}
