<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artista;
use Illuminate\Support\Facades\Redirect;

class ArtistaControler extends Controller
{
    public function index()
    {
        $artistas = Artista::where('bool', 0)->get();
        return view('admin.artistas',  compact('artistas'));
    }

    public function store(Request $request)
    {
        /*$request->validate([
            'Name' => 'required',
            'LastaName' => 'required',
            'Email' => 'required',
            'FechaNacimiento' => 'required',
            'Nacionalidad' => 'required',
            'Biografia' => 'required',
            'Porcentaje' => 'required',
            'bool' => 'required'
        ]);*/


        Artista::create($request->all());

        return Redirect::to(url('/admin/artistas'));
    }

    public function edit($id)
    {
        $artista = Artista::where('id', $id)->first();
        return view('admin.artista-edit', compact('artista'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'Name' => 'required',
            'LastaName' => 'required',
            'Email' => 'required',
            'FechaNacimiento' => 'required',
            'Nacionalidad' => 'required',
            'Biografia' => 'required',
            'Porcentaje' => 'required',
            'bool' => 'required'
        ]);

        $artista = Artista::where('id', $id)->first();
        $artista->Name = $request->Name;
        $artista->LastaName = $request->LastaName;
        $artista->Email = $request->Email;
        $artista->FechaNacimiento = $request->FechaNacimiento;
        $artista->Nacionalidad = $request->Nacionalidad;
        $artista->Biografia = $request->Biografia;
        $artista->Pord¿centaje = $request->Porcentaje;
        $artista->save();

        return Redirect::to(url('/admin/artistas'));
    }

    public function destroy($id)
    {
        $artista = Artista::where('id', $id)->first();
        $artista->bool = 1;
        $artista->save();

        return Redirect::to(url('/admin/artistas'));
    }
}
