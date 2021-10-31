<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index()
    {
        $usuarios = \DB::table('user')
        ->get();
        return view('admin.usuarios',  compact('usuarios'));
    }
}
