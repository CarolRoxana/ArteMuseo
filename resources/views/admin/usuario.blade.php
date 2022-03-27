@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<h4 class="text-center"><b> Bienvendido usuario<b> </h4>
<br>
<div class="container">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/usuario' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Nombre usuaro</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="name">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Contraseña</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="password" name="password">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Email</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="email" name="email">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Nickname</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Nickname">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Rol</h4>
                <hr>
                <select class="form-control" name="idRol">
                    @foreach($roles as $rol)
                        <option value="{{$rol->id}}">{{$rol->Nombre}}</option>
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