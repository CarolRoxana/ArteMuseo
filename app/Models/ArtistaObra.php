<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArtistaObra extends Model
{
    public $table = 'artistaobra';
    protected $fillable = [
        'idObra', 'idArtista'
    ];
}
