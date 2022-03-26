@extends('adminlte::page')

@section('title', 'Dashboard')

@php
    $showModulos = false;
@endphp

@foreach($permisos as $permiso)
    @php
        if($permiso->permiso->Nombre == "Gestionar Modulos"){
            $showModulos = true;
        }
    @endphp
@endforeach

@section('content_header')
    <h1 style="display: inline-block">Modulos</h1>
    @if($showModulos)
        <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='modulo'">Modulo nuevo</button>
    @endif
@stop

@section('content')
    @if($showModulos)
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
            @foreach($modulos as $row)
            <tr>
                    <td class="bg-warning">{{ $row->id }}</td>
                    <td class="bg-warning">{{ $row->Nombre }}</td>
                    <td class="bg-succes">
                        <form action="/admin/modulo/{{$row->id}}" method="POST">
                            <!--
                            <a class="btn" href="" title="show">
                                Detalles
                            </a>
                            -->
                            <a title="edit" class="btn btn-primary" href="{{url('/')}}/admin/modulo/edit/{{$row->id}}">
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
        <h2>No tiene acceso a este modulo</h2>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
