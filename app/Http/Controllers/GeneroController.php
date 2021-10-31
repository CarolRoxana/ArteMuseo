<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneroController extends Controller
{
    function index()
    {
        $generos = \DB::table('genero')
        ->get();
        return view('admin.generos',  compact('generos'));
    }
}
