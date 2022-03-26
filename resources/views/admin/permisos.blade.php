@extends('adminlte::page')

@section('title', 'Dashboard')

@php
    $showPermisos = false;
@endphp

@foreach($permisos as $permiso)
    @php
        if($permiso->permiso->Nombre == "Gestionar Permisos"){
            $showPermisos = true;
        }
    @endphp
@endforeach

@section('content_header')
    <h1 style="display: inline-block">Permisos</h1>
    @if($showPermisos)
        <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='permiso'">Permiso nuevo</button>
    @endif
@stop

@section('content')
    @if($showPermisos)
        <div class="container">
        <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Modulo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($permisosData as $row)
            <tr>
                    <td class="bg-warning">{{ $row->id }}</td>
                    <td class="bg-warning">{{ $row->Nombre }}</td>
                    <td class="bg-warning">{{ $row->modulo->Nombre }}</td>
                    <td class="bg-succes">
                        <form action="/admin/permiso/{{$row->id}}" method="POST">
                            <!--
                            <a class="btn" href="" title="show">
                                Detalles
                            </a>
                            -->
                            <a title="edit" class="btn btn-primary" href="{{url('/')}}/admin/permiso/edit/{{$row->id}}">
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
    @else
        <h2>No tiene acceso a este permiso</h2>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
