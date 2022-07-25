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
        'nombre'
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

}
