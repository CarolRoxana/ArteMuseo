@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1  class="text-center bg-danger" >Museo de Artes CAMARO</h1>
@stop

@section('content')
    <p class="text-center">Obra</p>

<div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                    <form class="bg-white py-2 px-4 shadow rounded mg-2">
                    <h4 class=" text-center ">Nombre Obra</h4>
                        <hr>
                    <input class="form-control border-0 bg-light shadow-sm" 
                    type="text" 
                    name="name">      
                    </form>
                    <br>

                    <form class="bg-white py-2 px-4 shadow rounded">
                    <h4 class=" text-center">Precio</h4>
                    <input class="form-control border-0 bg-light shadow-sm" 
                    type="text" 
                    name=" ">
                     <hr>
                    </form>
                    <br>

                    <form class="bg-white py-2 px-4 shadow rounded">
                    <h4 class=" text-center">Género</h4>
                    <input class="form-control border-0 bg-light shadow-sm" 
                    type="text" 
                    name=" ">
                      <hr>
                    </form>   
                    <br>

                    <form class="bg-white py-2 px-4 shadow rounded">
                    <h4 class=" text-center">Fecha creación</h4>
                    <input class="form-control border-0 bg-light shadow-sm" 
                    type="text" 
                    name=" ">
                        <hr>
                    </form>
                    <br>

                    <form class="bg-white py-2 px-4 shadow rounded">
                    <h4 class=" text-center">Imagen de la obra</h4>
                    <input img="">
                        <hr>
                    </form>


                    <br><br>       
                 </div>
     </div>
</div>

<button class="btn btn-primary btn-lg btn-block" onclick="window.location='obras'">Agregar</button><br>

<footer class="text-center bg-grey"> @ Todos lo derechos reservados </footer><br>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
