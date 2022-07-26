<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPublicacion extends Model
{
    use HasFactory;
    protected $table = 'tipopublicacion';
    protected $fillable = [
        'tipo'
    ];
    public $timestamps = false;
}
