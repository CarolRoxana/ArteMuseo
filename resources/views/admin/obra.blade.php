@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<h4 class="text-center"><b>Crear Obra</b></h4>
<br>
<div class="container">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/obra' }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Nombre</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="Name">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Precio</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" name="Precio">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Pocentaje</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" name="Porcentaje">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Imagen</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="file" name="img2">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                <h4 class=" text-center ">Imagen</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" name="img" value="/">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Estado</h4>
                <hr>
                <select class="form-control" name="Estado">
                    <option value="Disponible">Disponible</option>
                    <option value="Reservado">Reservado</option>
                    <option value="Vendido">Vendido</option>
                </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Artista</h4>
                <hr>
                <select class="form-control" name="idArtista">
                    @foreach($artistas as $artista)
                    <option value="{{$artista->id}}">{{$artista->Name}} {{$artista->LastaName}}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Genero</h4>
                <hr>
                <select class="form-control" name="idGenero">
                    @foreach($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->NombreGenero}}</option>
                    @endforeach
                </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Fecha Creacion</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="date" name="FechaCreacion">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" style="display: none">
                <h4 class=" text-center ">User</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" value="1" name="idUser">
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

<!-- 
         <form class="bg-white py-2 px-4 shadow rounded">
                    <h4 class=" text-center">Imagen de la obraaaa</h4>
                    <input type="file" class="form-control border-0 bg-light shadow-sm"  
                    name=" ">
                        <hr>
                    </form>
                -->

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