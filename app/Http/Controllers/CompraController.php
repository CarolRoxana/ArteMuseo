<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Factura;

class CompraController extends Controller
{
    public function index()
    {
        $userId = auth()->user()->id;
        $compras = Factura::where('id', $userId)->get();
        return view('admin.compras', compact('compras'));
    }
}
