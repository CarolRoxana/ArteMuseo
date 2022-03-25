<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membresia extends Model
{
    public $table = 'membresia';
    protected $fillable = [
        'Estado', 'FechaPago', 'idUser'
    ];
}
