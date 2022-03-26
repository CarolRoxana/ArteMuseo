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
        if ($request->hasFile('img')) {
            $image      = $request->file('img');
            $fileName   = time() . '.' . $image->getClientOriginalExtension();

            $img = Image::make($image->getRealPath());
            $img->resize(120, 120, function ($constraint) {
                $constraint->aspectRatio();                 
            });
            $request->img = $image->getRealPath();
            $img->stream(); // <-- Key point

            //dd();
            Storage::disk('local')->put('images/1/smalls'.'/'.$fileName, $img, 'public');
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
