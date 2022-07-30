<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecursosModulo extends Model
{
    use HasFactory;
    protected $table = "recursomodulos";
    protected $fillable = [
        'ruta',
        'descripcion',
        'temas_id'
    ];
    public $timestamps = false;

}
