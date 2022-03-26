<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    public $table = 'permisos';
    protected $fillable = [
        'Nombre', 'idModulo', 'bool'
    ];

    public function modulo(){
        return $this->belongsTo("App\Models\Modulo","idModulo","id");
    }
}
