<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Obra;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();

        return view('admin.facturas', compact('facturas'));
    }

    public function create()
    {
        
        $users = User::where('bool', 0)->get();
        $obras = Obra::where('bool', 0)
                       ->where('Estado', 'Disponible')
                       ->get();

        return view('admin.factura', compact('users', 'obras'));
    }

    public function compra($id)
    {
        $userId = auth()->user()->id;
        $users = User::where('id', $userId)->get();
        $obras = Obra::where('id', $id)->get();

        $obraDetalles = Obra::where('id', $id)->first();

        return view('admin.factura-compra', compact('users', 'obras', 'obraDetalles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'FechaCompra' => 'required',
            'TipoCompra' => 'required',
            'Iva' => 'required',
            'IvaPorcentaje' => 'required',
            'PrecioTotal' => 'required',
            'EstadoVenta' => 'required',
            'idObra' => 'required',
            'idUser' => 'required',
            'bool' => 'required'
        ]);

        Factura::create($request->all());
        $obra = Obra::where('id', $request->idObra)->first();
        $obra->Estado = $request->EstadoVenta;
        $obra->save();

        return Redirect::to(url('/admin/facturas'));
    }
}
