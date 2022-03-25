<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleGenero extends Model
{
    public $table = 'detallegenero';
    protected $fillable = [
        'nombre', 'idGenero'
    ];
}
