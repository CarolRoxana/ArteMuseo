<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Envio extends Model
{
    public $table = 'envio';
    protected $fillable = [
        'Estado', 'Direccion', 'iduser', 'idObra'
    ];
}
