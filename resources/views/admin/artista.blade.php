@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<p class="text-center">Crear Artista</p>

<div class="container">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/artista' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">

                <h4 class=" text-center ">Nombre artista</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Name">

                <br>
                <h4 class=" text-center ">Apellido</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="LastaName">

                <br>
                <h4 class=" text-center">Email</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Email">
                <hr>

                <br>
                <h4 class=" text-center">Fecha Nacimiento</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="FechaNacimiento">
                <hr>

                <br>
                <h4 class=" text-center">Nacionalidad</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Nacionalidad">
                <hr>

                <br>
                <h4 class=" text-center">Biografia</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Biografia">
                <hr>

                <br>
                <h4 class=" text-center">Porcentaje ganancias museo</h4>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Porcentaje">
                <hr>

                <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                    <h4 class=" text-center ">Bool</h4>
                    <hr>
                    <input class="form-control border-0 bg-light shadow-sm" type="text" value="/" name="img">
                    <br>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </form>
</div>


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