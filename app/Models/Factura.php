<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public $table = 'factura';
    protected $fillable = [
        'Codigofactura', 'FechaCompra', 'TipoCompra', 'Iva', 'IvaPorcentaje', 'PrecioTotal', 'EstadoVenta', 'idObra', 'idUser'
    ];

    public function user(){
        return $this->belongsTo("App\Models\User","idUser","id");
    }

    public function obra(){
        return $this->belongsTo("App\Models\Obra","idObra","id");
    }
}
