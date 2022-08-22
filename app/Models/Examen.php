<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sail\Console\PublishCommand;

class Examen extends Model
{
    use HasFactory;
    protected $table='examen';
    protected $fillable=[
        'tiempo',
        'peso',
        'is_final',
        'is_visible'
    ];
    public $timestamps=false;

    public function preguntas(){
        return $this->hasMany(Preguntas::class,'examen_id','id');
    }
    public function publicacion(){
        return $this->belongsTo(Publicacion::class,'publicacion_id','id');
    }
}
