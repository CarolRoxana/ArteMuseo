@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
    <h1 style="display: inline-block">Genero: {{ $genero->NombreGenero }} </h1>
    <br>
    <h3 style="display: inline-block"> Gestionar Detalles del Genero</h3>
@stop

@section('content')
<div class="container" style="margin-bottom: 10px">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/generoDetalleStore' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">nombre</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="nombre">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                <h4 class=" text-center ">idGenero</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" value="{{ $genero->id }}" name="idGenero">
                <br>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                <button type="submit" class="btn btn-primary" style="margin-top: 60px">Registrar</button>
            </div>
        </div>
    </form>
</div>
    <div class="container">
    <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
        <thead>
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
        @foreach($detalles as $row)
        <tr>
                <td class="bg-warning">{{ $row->id }}</td>
                <td class="bg-warning">{{ $row->nombre }}</td>
                <td class="bg-succes">
                    <form action="/admin/generoDetalle/{{$genero->id}}/{{$row->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" title="delete" class="btn btn-danger">
                            Eliminar
                        </button>
                    </form>
                </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
