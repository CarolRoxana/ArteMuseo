@extends('adminlte::page')

@section('title', 'Dashboard')



@section('content_header')
    <h1 style="display: inline-block">Rol: {{ $rol->Nombre }} </h1>
    <br>
    <h3 style="display: inline-block"> Gestionar Permisos del Rol</h3>
@stop

@section('content')
<div class="container" style="margin-bottom: 10px">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/rolPermisosStore' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Permiso disponible</h4>
                <hr>
                @if(count($permisosDisponibles) == 0)
                    <h5>No hay permisos disponibles</h5>
                @else
                    <select class="form-control" name="idPermiso">
                        @foreach($permisosDisponibles as $permisoDisponible)
                            <option value="{{$permisoDisponible->id}}">{{$permisoDisponible->Nombre}}</option>
                        @endforeach
                    </select>
                @endif
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                <h4 class=" text-center ">idRol</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" value="{{ $rol->id }}" name="idRol">
                <br>
            </div>
            @if(count($permisosDisponibles) == 0)
                <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                    <button type="submit" disabled class="btn btn-primary" style="margin-top: 60px">Registrar</button>
                </div>
            @else
                <div class="col-xs-12 col-sm-12 col-md-6 text-center">
                    <button type="submit" class="btn btn-primary" style="margin-top: 60px">Registrar</button>
                </div>
            @endif
            
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
        @foreach($permisos as $row)
        <tr>
                <td class="bg-warning">{{ $row->id }}</td>
                <td class="bg-warning">{{ $row->permiso->Nombre }}</td>
                <td class="bg-succes">
                    <form action="/admin/rolPermisos/{{$rol->id}}/{{$row->id}}" method="POST">
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
