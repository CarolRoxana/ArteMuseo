@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="display: inline-block">Artistas</h1>
<button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='artista'">Artista nuevo</button>
@stop

@section('content')
<div class="container">
    <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;">
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
                    <form action="/admin/artista/{{$row->id}}" method="POST">
                        <!--
                        <a class="btn" href="" title="show">
                            Detalles
                        </a>
                        -->
                        <a title="edit" class="btn btn-primary" href="{{url('/')}}/admin/artista/edit/{{$row->id}}">
                            Editar
                        </a>

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