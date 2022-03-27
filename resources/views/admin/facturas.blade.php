@extends('adminlte::page')

@section('title', 'Dashboard')


@section('content_header')
<h1 style="display: inline-block">Facturas</h1>
<button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='factura'">Crear factura</button>
@stop

@section('content')
    <div class="container">
        <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
            <thead>
                <tr>
                    <th>Fecha Compra</th>
                    <th>Codigo Factura</th>
                    <th>Metodo de pago</th>
                    <th>Iva</th>
                    <th>Iva Porcentaje</th>
                    <th>Precio</th>
                    <th>Obra</th>
                    <th>Usuario</th>
                    <th>Imagen Obra</th>
                </tr>
            </thead>
            <tbody>
            @foreach($facturas as $row)
            <tr>
                    <td class="bg-warning">{{ $row->FechaCompra }}</td>
                    <td class="bg-warning">{{ $row->Codigofactura }}</td>
                    <td class="bg-warning">{{ $row->TipoCompra }}</td>
                    <td class="bg-warning">{{ $row->Iva }}</td>
                    <td class="bg-warning">{{ $row->IvaPorcentaje }}%</td>
                    <td class="bg-warning">${{ $row->PrecioTotal }}</td>
                    <td class="bg-warning">{{ $row->obra->Name }}</td>
                    <td class="bg-warning">{{ $row->user->name }}</td>
                    <td class="bg-warning" ><img src="{{asset($row->obra->img)}} " alt="{{$row->obra->Name}}" width="100" height="100"></td>
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
    <script> console.log('Hi!'); </script>
@stop
