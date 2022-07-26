<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'dni',
        'nombres',
        'apellidos',
        'correo',
        'fechNac',
        'celular',
        'image'
    ];
    public $timestamps = false;


    public function fullName(){
        return "{$this->apellidos} {$this->nombres}" ;
    }
}
