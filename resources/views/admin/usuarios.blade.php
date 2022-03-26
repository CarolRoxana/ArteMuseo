@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@php
    $showUsuarios = false;
@endphp
<h1 style="display: inline-block">Usuarios</h1>
@foreach($permisos as $permiso)
    @php
        if($permiso->permiso->Nombre == "Gestionar usuarios"){
            $showUsuarios = true;
        }
    @endphp
@endforeach
@if($showUsuarios)
    <button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='usuario'">Usuario nuevo</button>
@endif
@stop

@section('content')
@if($showUsuarios)
    <div class="container">
        <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;">
            <thead>
                <tr>
                    <th>nombres</th>
                    <th>email</th>
                    <th>Nickname</th>
                    <th>Rol Usuario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $row)
                <tr>
                    <td class="bg-warning">{{ $row->name }}</td>
                    <td class="bg-warning">{{ $row->email }}</td>
                    <td class="bg-warning">{{ $row->Nickname }}</td>
                    <td class="bg-warning">{{ $row->rol->Nombre }}</td>
                    <td class="bg-succes">
                        <button class="btn btn-primary">Editar</button>
                        <button class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <h2> No tiene acceso a este modulo</h2>
@endif
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop