<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        //$facturas = Factura::where('bool', 0)->get();
        //return view('admin.facturas', compact('facturas'));
        return view('admin.facturas');
    }
}
