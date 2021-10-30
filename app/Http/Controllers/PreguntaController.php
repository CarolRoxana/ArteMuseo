<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    function index()
    {
        $registrado = false;
        $preguntas = \DB::table('preguntas')
        ->where('preguntas.bool',0)
        ->get();
        return view('admin.preguntas',  compact('preguntas', 'registrado'));
    }

    function index_registrado()
    {
        $registrado = true;
        $preguntas = \DB::table('preguntas')
        ->get();
        return view('admin.preguntas',  compact('preguntas', 'registrado'));
    }
}
