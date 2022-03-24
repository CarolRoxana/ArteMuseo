<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;

class ArtistaControler extends Controller
{
    function index()
    {
        $registrado = false;
        $artistas = Artista::where('bool', 0)->get();
        //dd($artistas);
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
