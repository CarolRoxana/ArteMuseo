<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use App\Models\Obra;
use App\Models\Artista;
use App\Models\Genero;
use App\Models\DetalleGenero;
use App\Models\ObraDetalle;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    function index($estado)
    {
        if ($estado == "vendidas") {
            $obras = Obra::where('bool', 0)
                ->where('Estado', 'Vendida')
                ->get();
        } else if ($estado == "reservadas") {
            $obras = Obra::where('bool', 0)
                ->where('Estado', 'Reservada')
                ->get();
        } else if ($estado == "disponibles") {
            $obras = Obra::where('bool', 0)
                ->where('Estado', 'Disponible')
                ->get();
        } else {
            $obras = Obra::where('bool', 0)->get();
            $estado = "all";
        }

        return view('admin.obras', compact('obras', 'estado'));
    }

    function create()
    {
        $artistas = Artista::where('bool', 0)->get();
        $generos = Genero::where('bool', 0)->get();

        return view('admin.obra', compact('artistas', 'generos'));
    }

    function store(Request $request)
    {
        if ($request->hasFile('img2')) {
            $image      = $request->file('img2');
            $destionation = "images/";
            $fileName   = time() . '.' . $image->getClientOriginalExtension();
            $imagenSubida = $request->file("img2")->move($destionation, $fileName);
            $request->merge(['img' => $destionation . $fileName]);
        }
        Obra::create($request->all());

        return Redirect::to(url('/admin/obras/all'));
    }


    public function obraDetalle($id)
    {
        $obra = Obra::where('id', $id)->first();
        $detalles = ObraDetalle::where('idObra', $id)->get();

        return view('admin.obra-show', compact('obra', 'detalles'));
    }

    public function obraGestionarDetalle($id)
    {
        $obra = Obra::where('id', $id)->first();
        $generoDetalles = DetalleGenero::where('idGenero', $obra->idGenero)->get();
        $detalles = ObraDetalle::where('idObra', $id)->get();

        return view('admin.obra-detalles', compact('obra', 'detalles', 'generoDetalles'));
    }

    public function obraDetalleStore(Request $request)
    {

        ObraDetalle::create($request->all());
        return Redirect::to(url('/admin/obraGestionarDetalles/' . $request->idObra));
    }

    public function obraDetalleDestroy($obra, $id)
    {
        obraDetalle::destroy($id);
        return Redirect::to(url('/admin/obraGestionarDetalles/' . $obra));
    }
}
