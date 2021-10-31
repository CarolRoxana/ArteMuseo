@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 style="display: inline-block">Generos</h1>
    <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='genero'">Genero nuevo</button>
@stop

@section('content')
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
         @foreach($generos as $row)
         <tr>
                 <td class="bg-warning">{{ $row->id }}</td>
                 <td class="bg-warning">{{ $row->NombreGenero }}</td>
                 <td class="bg-succes">
                     <button class="btn btn-primary">Editar</button>
                     <button class="btn btn-success">Gestionar Detalles</button>
                     <button class="btn btn-danger">Eliminar</button>
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