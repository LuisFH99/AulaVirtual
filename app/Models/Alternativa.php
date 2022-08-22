<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alternativa extends Model
{
    use HasFactory;
    protected $table = "alternativa";
    protected $fillable = [
        'respuesta',
        'puntaje',
        'pregunta_id'
    ];
    public $timestamps=false;
}
