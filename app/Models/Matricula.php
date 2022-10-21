<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    use HasFactory;
    protected $table = 'matricula';
    protected $fillable = [
        'estudiantes_id',
        'publicacion_id',
        'response'
    ];
    public $timestamps = false;

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class, 'estudiantes_id', 'id');
    }
    public function publicacion()
    {
        return $this->belongsTo(Publicacion::class, 'publicacion_id', 'id');
    }
    public function certificados()
    {
        return $this->hasMany(Certificado::class);
    }
}
