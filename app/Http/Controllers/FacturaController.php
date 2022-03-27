<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();
        return view('admin.facturas', compact('facturas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'Codigofactura' => 'required',
            'FechaCompra' => 'required',
            'TipoCompra' => 'required',
            'iva' => 'required',
            'IvaPorcentaje' => 'required',
            'PrecioTotal' => 'required',
            'EstadoVenta' => 'required'
        ]);
        Factura::create($request->all());

        return Redirect::to(url('/admin/factura'));
    }
}
