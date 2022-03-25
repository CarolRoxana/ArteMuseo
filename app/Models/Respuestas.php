<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
    public $table = 'respuestas';
    protected $fillable = [
        'Nombre_Respuesta', 'idUsuario', 'idPreguntas'
    ];
}
