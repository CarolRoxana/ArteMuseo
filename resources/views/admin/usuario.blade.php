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
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="contrasena">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Email</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Email">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Nick name</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="name">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Tipo usuario</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Tipo tarjeta</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Código</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="codigo">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Pregunta de seguridad 1</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Pregunta de seguridad 2</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center">Pregunta de seguridad 3</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
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