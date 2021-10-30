@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
@if($registrado == 1)
    <h4 style="display: inline-block" style="color: green">Registro guardado satisfactoriamente</h4><br>
@endif
<h1 style="display: inline-block">Obras</h1>
<button style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button" onclick="window.location='obra'">Añadir Obras</button>
<br>
<p>Estado de obra:</p>
  <div>
    <input type="radio" id="contactChoice1"
     name="contact" value="email">
    <label for="contactChoice1">Vendido</label>

    <input type="radio" id="contactChoice2"
     name="contact" value="phone">
    <label for="contactChoice2">Reservado</label>

    <input type="radio" id="contactChoice3"
     name="contact" value="mail">
    <label for="contactChoice3">Disponible</label>
    <button style="margin-left: 60%; display: inline-block; margin-top: -70px" class="btn btn-primary" type="button" onclick="window.location='obras_filtro'">Filtrar Obras por estado</button>
  </div>
@stop

@section('content')
    <div class="container">
        <table id="empleados" class="table table-striped table-bordered" style="width:100%; white-space:nowrap;" >
             <thead>
                 <tr>
                     <th>Nombre</th>
                     <th>Estado</th>
                     <th>Precio</th>
                     <th>Imagen</th>
                     <th>Artista</th>
                     <th>Acciones</th>
                 </tr>
             </thead>
             <tbody>
             @foreach($obras as $row)
             <tr>
                     <td class="bg-warning">{{ $row->Name }}</td>
                     @if($row->Estado =='Disponible' ||  $row->Estado =='Dispponible')
                        <td class="bg-success">{{ $row->Estado }}</td>
                     @endif
                     @if($row->Estado !='Disponible' && $row->Estado !='Dispponible')
                        <td class="bg-danger">{{ $row->Estado }}</td>
                     @endif
                     <td class="bg-warning">{{ $row->Precio }}$</td>
                     <td class="bg-warning" ><img src="{{$row->img}} "width="100" height="100"></td>
                     <td class="bg-warning">{{ $row->artistaNombre }} {{ $row->artistaApellido }}</td>
                     <td class="bg-succes">
                        @if($row->Estado =='Disponible')   
                            <button class="btn btn-primary">Comprar</button>
                        @endif
                        <button class="btn btn-success">Detalles</button>
                    </td>
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
