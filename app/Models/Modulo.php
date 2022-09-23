<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $table = 'modulos';
    protected $fillable = [
        'link',
        'nombre',
        'publicacion_id'
    ];
    public $timestamps = false;

    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class,'publicacion_id','id');
    }
    public function temas()
    {
        return $this->hasMany(Tema::class,'modulos_id','id');
    }
    public function tareas()
    {
        return $this->hasMany(Tarea::class,'modulos_id','id');
    }
    public function examenmodulo(){
        return $this->hasOne(Examen::class,'modulo_id','id')->where('is_visible',1);
    }

}
