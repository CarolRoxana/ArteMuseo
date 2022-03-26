@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 class="text-center bg-danger">Museo de Artes CAMARO</h1>
@stop

@section('content')
<h5 class="text-center"> <b>Crear Factura </b></h5>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h4 class=" text-center ">Codigo factura</h4>
            <hr>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="CodigoFactura">
            <br>
        </div>
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h4 class=" text-center ">Fecha compra</h4>
            <hr>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="FechaCompra">
            <br>
        </div>
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h4 class=" text-center ">Tipo compra</h4>
            <select class="form-select form-select-lg mb-3 selectpicker" style="margin-left: 30%" aria-label=".form-select-lg example">
                <option selected>Metodo de pago</option>
                <option value="1">Debito</option>
                <option value="2">Credito</option>
                <option value="3">Cripto Moneda</option>
                <option value="3">Efectivo</option>
            </select>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="TipoCompra">
            <br>
        </div>
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h4 class=" text-center ">Iva</h4>
            <hr>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="Iva">
            <br>
        </div>
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <h4 class=" text-center ">Precio Total</h4>
            <hr>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="PrecioTotal">
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