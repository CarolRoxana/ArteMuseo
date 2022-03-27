<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObraDetalle extends Model
{
    public $table = 'obradetalle';
    protected $fillable = [
        'descripcion', 'idDetalleGenero', 'idObra'
    ];

    public function generoDetalle(){
        return $this->belongsTo("App\Models\DetalleGenero","idDetalleGenero","id");
    }

    public function obra(){
        return $this->belongsTo("App\Models\Obra","idObra","id");
    }
}
