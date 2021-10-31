<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ObraController extends Controller
{
    function index()
    {
        $obras = \DB::table('obra')
        ->leftJoin('genero','obra.idGenero','genero.id')
        ->leftJoin('artistaobra','obra.id','artistaobra.idObra')
        ->leftJoin('artista','obra.id','artista.id')
        ->select('obra.*','genero.NombreGenero as genero', 'artista.Name as artistaNombre', 'artista.Lastaname as artistaApellido')
        ->get();
        return view('admin.obras', compact('obras'));
    }
}
