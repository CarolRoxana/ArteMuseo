<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Rol;
use App\Models\RolPermiso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    function index()
    {
        $usuarios = User::where('bool', 0)->get();
        $userRol = auth()->user()->rol->id;
        $permisos = RolPermiso::where('idRol', $userRol)->get();
        return view('admin.usuarios',  compact('usuarios', 'permisos'));
    }

    function create()
    {
        $roles = Rol::where('bool', 0)->get();
        return view('admin.usuario',  compact('roles'));
    }

    function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
            'email' => 'required',
            'Nickname' => 'required',
            'idRol' => 'required',
            'bool' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'Nickname' => $request->Nickname,
            'idRol' => $request->idRol,
            'bool' => 0,
            'password' => Hash::make($request->idRol),
        ]);
        return Redirect::to(url('/admin/usuarios'));
    }
}