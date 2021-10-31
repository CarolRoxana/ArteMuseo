<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObraController extends Controller
{
    function index()
    {
        $obras = \DB::table('obra')
        ->leftJoin('genero','obra.idGenero','genero.id')
        ->select('obra.*','genero.NombreGenero as genero')
        ->get();
        return view('admin.obras', compact('obras'));
    }
}
