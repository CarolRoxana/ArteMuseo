<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaControler extends Controller
{
    function index()
    {
        $registrado = false;
        $artistas = \DB::table('artista')
        ->where('artista.bool',0)
        ->get();
        return view('admin.artistas',  compact('artistas', 'registrado'));
    }

    function index_registrado()
    {
        $registrado = true;
        $artistas = \DB::table('artista')
        ->get();
        return view('admin.artistas',  compact('artistas', 'registrado'));
    }
}
