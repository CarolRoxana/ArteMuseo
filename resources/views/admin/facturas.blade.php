@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1 style="display: inline-block">Facturas</h1>
@stop

@section('content')

<div class="container">
    <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;">
        <thead>
            <tr>
                <th>Codigofactura</th>
                <th>FechaCompra</th>
                <th>TipoCompra</th>
                <th>Iva</th>
                <th>IvaPorcentaje</th>
                <th>PrecioTotal</th>
                <th>EstadoVenta</th>
            </tr>
        </thead>
        <tbody>
            @foreach($facturas as $row)
            <tr>
                <td class="bg-warning">{{ $row->Codigofactura }}</td>
                <td class="bg-warning">{{ $row->FechaCompra }}</td>
                <td class="bg-warning">{{ $row->TipoCompra}}</td>
                <td class="bg-warning">{{ $row->Iva}}</td>
                <td class="bg-warning">{{ $row->IvaPorcentaje}}</td>
                <td class="bg-warning">{{ $row->PrecioTotal}}</td>
                <td class="btn-success">{{ $row->EstadoVenta}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop



@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
@stop