<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\RolPermiso;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    function index()
    {
        $usuarios = User::where('bool', 0)->get();
        $userRol = auth()->user()->rol->id;
        $permisos = RolPermiso::where('idRol', $userRol)->get();
        return view('admin.usuarios',  compact('usuarios', 'permisos'));
    }
}
