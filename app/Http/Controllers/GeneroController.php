<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneroController extends Controller
{
    function index()
    {
        $registrado = false;
        $generos = \DB::table('genero')
        ->where('genero.bool',0)
        ->get();
        return view('admin.generos',  compact('generos', 'registrado'));
    }

    function index_registrado()
    {
        $registrado = true;
        $generos = \DB::table('genero')
        ->get();
        return view('admin.generos',  compact('generos', 'registrado'));
    }
}
