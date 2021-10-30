@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@if($registrado == 1)
    <h4 style="display: inline-block" style="color: green">Registro guardado satisfactoriamente</h4><br>
@endif
    <h1 style="display: inline-block">Artistas</h1>
    <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='artista'">Artista nuevo</button>
@stop

@section('content')
    <div class="container">
    <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
         <thead>
             <tr>
                 <th>Nombre</th>
                 <th>Nacionalidad</th>
                 <th>Fecha Nacimiento</th>
                 <th>Biografia</th>
             </tr>
         </thead>
         <tbody>
         @foreach($artistas as $row)
         <tr>
                 <td class="bg-warning">{{ $row->Name }} {{ $row->LastaName }}</td>
                 <td class="bg-warning">{{ $row->Nacionalidad }}</td>
                 <td class="bg-warning">{{ Str::limit($row->FechaNacimiento , 10)}}</td>
                 <td class="bg-warning" style="max-width: 300px; overflow:scroll">{{ $row->Biografia }}</td>
                 <td class="bg-succes">
                     <button class="btn btn-primary">Editar</button>
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
