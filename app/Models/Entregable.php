<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entregable extends Model
{
    use HasFactory;
    protected $table = 'entregable';
    protected $fillable = [
        'ruta',
        'nota',
        'tarea_id',
        'matricula_id'
    ];
    public $timestamps = false;

    public function tarea()
    {
        return $this->belongsTo(Tarea::class, 'tarea_id', 'id');
    }
    public function matriculado()
    {
        return $this->belongsTo(Matricula::class, 'matricula_id', 'id');
    }
}
