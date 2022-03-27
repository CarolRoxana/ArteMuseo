@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-8 col-lg-8 mx-auto" >
            <h2 style="display: inline-block">Obra: {{ $obra->Name }} </h2><br>
            <h5 style="display: inline-block">Genero: {{ $obra->genero->NombreGenero }} ,</h5>
            <h5 style="display: inline-block">Artista: {{ $obra->artista->Name }}  {{ $obra->artista->LastaName }} </h5><br>
            <h3 style="display: inline-block">Detalles de la obra</h3>
        </div>
        <div class="col-12 col-sm-4 col-lg-4 mx-auto" >
            <h5 style="display: inline-block">Estado: {{ $obra->Estado }} </h5><br>
            <h5 style="display: inline-block">Precio: ${{ $obra->Precio }} </h5><br>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="container" style="margin-bottom: 10px">
</div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-8 col-lg-8 mx-auto" >
                <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
                    <thead>
                        <tr>
                            <th>Detalle</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($detalles as $row)
                    <tr>
                            <td class="bg-warning">{{ $row->generoDetalle->nombre }}</td>
                            <td class="bg-warning">{{ $row->descripcion }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-12 col-sm-4 col-lg-4 mx-auto" style="min-height: 500px">
                <img src="{{asset($obra->img)}} " alt="{{$obra->Name}}" width="100" height="100" style="width: 100%; height: auto">
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
