<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaControler extends Controller
{
    function index()
    {
        $artistas = \DB::table('artista')
        ->get();
        return view('admin.artistas',  compact('artistas'));
    }
}
