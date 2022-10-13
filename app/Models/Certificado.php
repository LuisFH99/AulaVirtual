<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificado extends Model{

    use HasFactory;
    protected $table = 'certificados';
    protected $fillable = ['ruta', 'validacion', 'fech_em', 'tipo_id', 'matricula_id'];
    public $timestamps = false;

    public function matriculas(){
        return $this->belongsTo(Matricula::class,'matricula_id');
    }

}
