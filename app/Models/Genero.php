<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    public $table = 'genero';
    protected $fillable = [
        'NombreGenero', 'bool'
    ];
}
