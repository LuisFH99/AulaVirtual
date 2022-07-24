<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = ['nombre', 'descripcion', 'categoria_id'];
    public $timestamps = false;

    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','id');
    }
}
