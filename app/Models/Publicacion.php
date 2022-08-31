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
        'cursos_id',
        'niveles_id',
        'docentes_id',
        'tipopublicacion_id'
    ];
    public $timestamps = false;

    public function publicaciondocente()
    {
        return $this->belongsToMany(Docente::class, 'docente_publicacion', 'publicacion_id', 'docentes_id');
    }

    public function curso()
    {
        return $this->belongsTo(Curso::class, 'cursos_id', 'id');
    }
    public function nivelpublicacion()
    {
        return $this->belongsTo(Nivel::class, 'niveles_id', 'id');
    }

    public function tipopublicacion()
    {
        return $this->belongsTo(TipoPublicacion::class, 'tipopublicacion_id', 'id');
    }

    public function matriculados()
    {
        return $this->hasMany(Matricula::class, 'publicacion_id', 'id');
    }

    public function modulos()
    {
        return $this->hasMany(Modulo::class, 'publicacion_id', 'id');
    }

    public function examen()
    {
        return $this->hasMany(Examen::class,'publicacion_id','id');
    }
}
