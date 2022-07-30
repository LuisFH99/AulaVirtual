<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Tema extends Model
{
    use HasFactory;
    protected $table = "temas";
    protected $fillable = [
        'descripcion',
        'acceso',
        'fecha'
    ];
    public $timestamps = false;

    public function recursos()
    {
        return $this->hasMany(RecursosModulo::class, 'temas_id', 'id')
            ->where('descripcion', '<>', 'video');
    }
    public function videos()
    {
        return $this->hasMany(RecursosModulo::class, 'temas_id', 'id')
            ->where('descripcion', '=', 'video');
    }

    public function modulo()
    {
        return $this->belongsTo(Modulo::class, 'modulos_id', 'id');
    }
}
