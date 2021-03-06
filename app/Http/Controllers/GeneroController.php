<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Models\Genero;
use App\Models\DetalleGenero;
use App\Models\ObraDetalle;

class GeneroController extends Controller
{
    public function index()
    {
        $generos = Genero::where('bool', 0)->get();
        return view('admin.generos', compact('generos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NombreGenero' => 'required',
            'bool' => 'required'
        ]);

        Genero::create($request->all());

        return Redirect::to(url('/admin/generos'));
    }

    public function edit($id)
    {
        $genero = Genero::where('id', $id)->first();
        return view('admin.genero-edit', compact('genero'));
    }

    public function update($id, Request $request)
    {   
        $request->validate([
            'NombreGenero' => 'required',
            'bool' => 'required'
        ]);

        $genero = Genero::where('id', $id)->first();
        $genero->NombreGenero = $request->NombreGenero;
        $genero->save();

        return Redirect::to(url('/admin/generos'));
    }

    public function destroy($id)
    {   
        $genero = Genero::where('id', $id)->first();
        $genero->bool = 1;
        $genero->save();

        return Redirect::to(url('/admin/generos'));
    }

    public function generoDetalle($id)
    {
        $genero = Genero::where('id', $id)->first();
        $detalles = DetalleGenero::where('idGenero', $id)->get();

        return view('admin.genero-detalles', compact('genero', 'detalles'));
    }

    public function generoDetalleStore(Request $request)
    {
          
        DetalleGenero::create($request->all());
        return Redirect::to(url('/admin/generoDetalle/'.$request->idGenero));
    }

    public function generoDetalleDestroy($genero, $id)
    {   
        ObraDetalle::where('idDetalleGenero', '=', $id)->delete();
        DetalleGenero::destroy($id);
        return Redirect::to(url('/admin/generoDetalle/'.$genero));
    }
}
