<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Permiso;
use App\Models\RolPermiso;
use App\Models\Modulo;

class PermisoController extends Controller
{
    public function index()
    {
        $permisosData = Permiso::where('bool', 0)->get();
        $userRol = auth()->user()->rol->id;
        $permisos = RolPermiso::where('idRol', $userRol)->get();
        return view('admin.permisos', compact('permisosData', 'permisos'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Nombre' => 'required',
            'idModulo' => 'required',
            'bool' => 'required'
        ]);
        
        Permiso::create($request->all());
        return Redirect::to(url('/admin/permisos'));
    }

    function create()
    {   
        $modulos = Modulo::where('bool', 0)->get();
        return view('admin.permiso', compact('modulos'));
    }

    public function edit($id)
    {
        $permiso = Permiso::where('id', $id)->first();
        $modulos = Modulo::where('bool', 0)->get();
        return view('admin.permiso-edit', compact('modulos', 'permiso'));
    }

    public function update($id, Request $request)
    {   
        $request->validate([
            'Nombre' => 'required',
            'idModulo' => 'required',
            'bool' => 'required'
        ]);

        $permiso = Permiso::where('id', $id)->first();
        $permiso->Nombre = $request->Nombre;
        $permiso->idModulo = $request->idModulo;
        $permiso->save();

        return Redirect::to(url('/admin/permisos'));
    }

    public function destroy($id)
    {   
        $permiso = Permiso::where('id', $id)->first();
        $permiso->bool = 1;
        $permiso->save();

        return Redirect::to(url('/admin/permisos'));
    }
}
