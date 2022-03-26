@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="display: inline-block">Facturas</h1>
<button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='genero'">Gestionar factura</button>
@stop



@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop