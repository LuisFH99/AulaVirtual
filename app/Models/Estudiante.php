<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $fillable = ['persona_id'];
    public $timestamps = false;

    public function datos(){
        return $this->belongsTo(Persona::class,'persona_id','id');
    }
}
