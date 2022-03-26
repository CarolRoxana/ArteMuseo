<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Rol;
use App\Models\Permiso;
use App\Models\RolPermiso;

class RolController extends Controller
{
    public function index()
    {
        $roles = Rol::where('bool', 0)->get();
        $userRol = auth()->user()->rol->id;
        $permisos = RolPermiso::where('idRol', $userRol)->get();
        return view('admin.roles', compact('roles', 'permisos'));
    }

    public function store(Request $request)
    {
        
        $request->validate([
            'Nombre' => 'required',
            'bool' => 'required'
        ]);
        
        Rol::create($request->all());
        return Redirect::to(url('/admin/roles'));
    }

    public function edit($id)
    {
        $rol = Rol::where('id', $id)->first();
        return view('admin.rol-edit', compact('rol'));
    }

    public function update($id, Request $request)
    {   
        $request->validate([
            'Nombre' => 'required',
            'bool' => 'required'
        ]);

        $rol = Rol::where('id', $id)->first();
        $rol->Nombre = $request->Nombre;
        $rol->save();

        return Redirect::to(url('/admin/roles'));
    }

    public function destroy($id)
    {   
        $rol = Rol::where('id', $id)->first();
        $rol->bool = 1;
        $rol->save();

        return Redirect::to(url('/admin/roles'));
    }

    public function rolPermiso($id)
    {
        $rol = Rol::where('id', $id)->first();
        $permisos = RolPermiso::where('idRol', $id)->get();
        $permisosDisponibles = Permiso::where('bool', 0)->get();

        return view('admin.rol-permiso', compact('rol','permisos', 'permisosDisponibles'));
    }

    public function rolPermisoStore(Request $request)
    {
        $permisoExistente = RolPermiso::where('idRol', $request->idRol)
                                        ->where('idPermiso', $request->idPermiso)
                                        ->first();
        

        if($permisoExistente == null){            
            RolPermiso::create($request->all());
        }

        return Redirect::to(url('/admin/rolPermisos/'.$request->idRol));
    }

    public function rolPermisoDestroy($rol, $id)
    {
        RolPermiso::destroy($id);
        return Redirect::to(url('/admin/rolPermisos/'.$rol));
    }
}
