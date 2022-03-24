<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    public $table = "artista";
    protected $fillable = [
        'Name', 'LastaName', 'Email', 'FechaNacimiento', 'Nacionalidad', 'Biografia', 'img', 'Porcentaje', 'bool'     
    ];
}
