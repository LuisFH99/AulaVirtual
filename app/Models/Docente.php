<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{
    use HasFactory;
    protected $table = 'docentes';
    protected $fillable = [
        'persona_id',
        'especialidad'
    ];
    public $timestamps = false;
    
    public function datos()
    {
        return $this->belongsTo(Persona::class,'persona_id','id');
    }

    public function docentepublicacion()
    {
        return $this->belongsToMany(Publicacion::class, 'docente_publicacion','publicacion_id','docentes_id');
    }
}
