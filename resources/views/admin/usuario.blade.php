@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<p class="text-center">Bienvendido usuario</p>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white py-2 px-4 shadow rounded mg-2">
                <h4 class=" text-center ">Nombre usuaro</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="name">
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Contraseña</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="contrasena">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Email</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Email">
                <hr>
            </form>

            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Nick name</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="name">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Tipo usuario</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Tipo tarjeta</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Código</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="codigo">
                <hr>
            </form>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Pregunta de seguridad 1</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <h4 class=" text-center">Respuesta de seguridad 1</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Pregunta de seguridad 2</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <h4 class=" text-center">Respuesta de seguridad 2</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
            </form>
            <br>

            <form class="bg-white py-2 px-4 shadow rounded">
                <h4 class=" text-center">Pregunta de seguridad 3</h4>
                <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                    <option selected>Pregunta de seguridad</option>
                    <option value="1">Nombre Mascota</option>
                    <option value="2">Nombre Mama</option>
                    <option value="3">Comida Favorita</option>
                    <option value="3">Lugar Favorito</option>
                </select>
                <h4 class=" text-center">Respuesta de seguridad 3</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="respuesta">
                <hr>
            </form>
            <br>
        </div>
    </div>
</div>

<button class="btn btn-primary btn-lg btn-block" onclick="window.location='usuarios_registrado'">Registrar</button><br>
<a href=""></a>
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