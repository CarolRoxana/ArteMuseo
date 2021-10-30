@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1 class="text-center">Usuarios</h1> <br>
    <button class="btn btn-primary btn-lg btn-block" onclick="window.location='usuario'">Usuario nuevo </button>
    
@stop

@section('content')
    <p class="text-center"> Registro</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
