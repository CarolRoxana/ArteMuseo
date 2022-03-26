<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use App\Models\Obra;
use App\Models\Artista;
use App\Models\Genero;
use Illuminate\Http\Request;

class ObraController extends Controller
{
    function index()
    {   
        $obras = Obra::where('bool', 0)->get();
        //dd($obras);
        //$user = auth()->user()->id;
        //dd($user);
        return view('admin.obras', compact('obras'));
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
            $request->merge(['img' => $destionation.$fileName]);
        }
        Obra::create($request->all());
        
        return Redirect::to(url('/admin/obras'));
    }


    function index_filtro()
    {
        $obras = \DB::table('obra')
        ->leftJoin('genero','obra.idGenero','genero.id')
        ->leftJoin('artistaobra','obra.id','artistaobra.idObra')
        ->leftJoin('artista','obra.id','artista.id')
        ->where('obra.estado','Disponible')
        ->select('obra.*','genero.NombreGenero as genero', 'artista.Name as artistaNombre', 'artista.Lastaname as artistaApellido')
        ->get();
        return view('admin.obras', compact('obras'));
    }
}
