<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacion extends Model
{
    use HasFactory;
    protected $table = 'publicacion';
    protected $fillable = [
        'ruta_img',
        'nota_minima',
        'fecha_inicio',
        'fecha_fin',
        'fecha_inicio_matricula',
        'fecha_fin_matricula',
        'horas',
        'curso_id',
        'niveles_id',
        'docentes_id'
    ];
    public $timestamps = false;

    public function curso()
    {
        return $this->belongsTo(Curso::class,'cursos_id','id');
    }
    public function nivel()
    {
        return $this->belongsTo(Nivel::class,'niveles_id','id');
    }
    public function docente()
    {
        return $this->belongsTo(Docente::class,'docentes_id','id');
    }
    public function matriculados()
    {
        return $this->hasMany(Matricula::class,'publicacion_id','id');
    }
    
}
