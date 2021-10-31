<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    function index()
    {
        $preguntas = \DB::table('preguntas')
        ->get();
        return view('admin.preguntas',  compact('preguntas'));
    }
}
