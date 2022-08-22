<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
    use HasFactory;
    protected $table="preguntas";
    protected $fillable=[
        'pregunta',
        'examen_id'
    ];

    public $timestamps=false;

    public function alternativas(){
        return $this->hasMany(Alternativa::class,'pregunta_id','id');
    }
}
