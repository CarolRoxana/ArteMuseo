<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Modulo;
use App\Models\RolPermiso;

class ModuloController extends Controller
{
    public function index()
    {
        $modulos = Modulo::where('bool', 0)->get();
        $userRol = auth()->user()->rol->id;
        $permisos = RolPermiso::where('idRol', $userRol)->get();
        return view('admin.modulos', compact('modulos', 'permisos'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Nombre' => 'required',
            'bool' => 'required'
        ]);
        
        Modulo::create($request->all());
        return Redirect::to(url('/admin/modulos'));
    }

    public function edit($id)
    {
        $modulo = Modulo::where('id', $id)->first();
        return view('admin.modulo-edit', compact('modulo'));
    }

    public function update($id, Request $request)
    {   
        $request->validate([
            'Nombre' => 'required',
            'bool' => 'required'
        ]);

        $modulo = Modulo::where('id', $id)->first();
        $modulo->Nombre = $request->Nombre;
        $modulo->save();

        return Redirect::to(url('/admin/modulos'));
    }

    public function destroy($id)
    {   
        $modulo = Modulo::where('id', $id)->first();
        $modulo->bool = 1;
        $modulo->save();

        return Redirect::to(url('/admin/modulos'));
    }
}
