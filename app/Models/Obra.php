<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{
    public $table = 'obra';
    protected $fillable = [
        'Name', 'Estado', 'Precio', 'FechaCreacion', 'Porcentaje', 'img', 'idGenero', 'isUser', 'bool'
    ];
}
