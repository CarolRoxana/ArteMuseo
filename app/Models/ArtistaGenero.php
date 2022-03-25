<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaGenero extends Model
{
    public $tabla = 'artistagenero';
    protected $fillable = [
        'idGenero', 'idArtista'
    ];
}
