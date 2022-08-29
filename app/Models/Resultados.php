<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultados extends Model
{
    use HasFactory;
    protected $table = "resultados";
    protected $fillable = ['examen_id', 'matricula_id'];
    public $timestamps = false;

    public function respuestas(){
        return $this->belongsToMany(Alternativa::class,'resultadorespuestas');
    }
}
