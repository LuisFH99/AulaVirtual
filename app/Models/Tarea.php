<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;
    protected $table = 'tarea';
    protected $fillable = [
        'descripcion',
        'fecha_entrega',
        'ruta_archivo',
        'modulos_id'
    ];

    public $timestamps = false;

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'modulos_id', 'id');
    }
    public function entregables()
    {
        return $this->hasMany(Entregable::class, 'tarea_id', 'id');
    }
}
