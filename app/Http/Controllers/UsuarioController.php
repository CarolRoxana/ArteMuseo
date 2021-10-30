<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index()
    {
        $registrado = false;
        $usuarios = \DB::table('user')
        ->where('user.bool',0)
        ->get();
        return view('admin.usuarios',  compact('usuarios', 'registrado'));
    }

    function index_registrado()
    {
        $registrado = true;
        $usuarios = \DB::table('user')
        ->get();
        return view('admin.usuarios',  compact('usuarios', 'registrado'));
    }
}
