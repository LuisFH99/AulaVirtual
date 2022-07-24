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
        'nombre',
        'apep',
        'apem',
        'correo',
        'fechNac',
        'celular',
        'image'
    ];
    public $timestamps = false;


    public function fullName(){
        return "{$this->apep} {$this->apem} {$this->nombre}" ;
    }
}
