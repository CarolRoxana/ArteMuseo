@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<p class="text-center">Crear Permiso</p>

<div class="container">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/permiso' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Nombre Permiso</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Nombre">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Modulo</h4>
                <hr>
                <select class="form-control" name="idModulo">
                    @foreach($modulos as $modulo)
                        <option value="{{$modulo->id}}">{{$modulo->Nombre}}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                <h4 class=" text-center ">Bool</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" value="0" name="bool">
                <br>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Registrar</button>
            </div>
        </div>
    </form>
</div>

<footer class="text-center bg-grey"> @ Todos lo derechos reservados </footer><br>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop