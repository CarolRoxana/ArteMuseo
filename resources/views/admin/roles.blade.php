@extends('adminlte::page')

@section('title', 'Dashboard')

@php
    $showRoles = false;
@endphp

@foreach($permisos as $permiso)
    @php
        if($permiso->permiso->Nombre == "Gestionar Roles"){
            $showRoles = true;
        }
    @endphp
@endforeach

@section('content_header')
    <h1 style="display: inline-block">Roles</h1>
    @if($showRoles)
        <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='rol'">Rol nuevo</button>
    @endif
@stop

@section('content')
    @if($showRoles)
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
            @foreach($roles as $row)
            <tr>
                    <td class="bg-warning">{{ $row->id }}</td>
                    <td class="bg-warning">{{ $row->Nombre }}</td>
                    <td class="bg-succes">
                        <form action="/admin/rol/{{$row->id}}" method="POST">
                            <!--
                            <a class="btn" href="" title="show">
                                Detalles
                            </a>
                            -->
                            <a title="edit" class="btn btn-primary" href="{{url('/')}}/admin/rol/edit/{{$row->id}}">
                                Editar
                            </a>

                            <a title="gestionar" class="btn btn-warning" href="{{url('/')}}/admin/rolPermisos/{{$row->id}}">
                                Gestionar Permisos
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
