@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<h5 class="text-center"> <b>Completar Factura </b></h5>

<div class="container">
    <form class="bg-white py-2 px-4 shadow rounded mg-2" action="{{ '/admin/factura' }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Fecha compra</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="date" name="FechaCompra">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Tipo compra</h4>
                <hr>
                    <select class="form-control" name="TipoCompra">
                        <option value="Debito" selected>Debito</option>
                        <option value="Credito">Credito</option>
                        <option value="Criptomoneda">Criptomoneda</option>
                        <option value="Efectivo">Efectivo</option>
                    </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Estado Venta</h4>
                <hr>
                    <select class="form-control" name="EstadoVenta">
                        <option value="Vendido" selected>Vendida</option>
                        <option value="Reservado">Reservada</option>
                    </select>
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Obra</h4>
                <hr>
                    <select class="form-control" name="idObra">
                        @foreach($obras as $obra)
                            <option value="{{$obra->id}}">{{$obra->Name}}</option>
                        @endforeach
                    </select>
                <br>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto" >
                <h4 class=" text-center ">Comprador</h4>
                <hr>
                    <select class="form-control" name="idUser">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </select>
                <br>
            </div>

            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Iva</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" name="Iva">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Iva Porcentaje</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" value="{{$obraDetalles->Porcentaje}}" name="IvaPorcentaje">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Precio Total</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="text" value="{{$obraDetalles->Precio}}" name="PrecioTotal">
                <br>
            </div>
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                <h4 class=" text-center ">Codigo factura</h4>
                <hr>
                <input class="form-control border-0 bg-light shadow-sm" type="number" name="Codigofactura">
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
                <button type="submit" class="btn btn-primary">Comprar</button>
            </div>
        </div>
    </form>
</div>

<br>
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