<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index()
    {
        $registrado = false;
        $usuarios = \DB::table('users')
            ->where('users.bool', 0)
            ->get();
        return view('admin.usuarios',  compact('usuarios', 'registrado'));
    }

    function index_registrado()
    {
        $registrado = true;
        $usuarios = \DB::table('users')
            ->get();
        return view('admin.usuarios',  compact('usuarios', 'registrado'));
    }
}
