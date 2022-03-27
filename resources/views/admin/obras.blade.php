@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1 style="display: inline-block">Obras</h1>
<a style="margin-left: 60%; display: inline-block" class="btn btn-success" type="button"  href="{{url('/')}}/admin/obra">
    Añadir Obras
</a>
<br>
<p>Filtrar por estado de obra:</p>
  <div>
    <a title="Detalles" class="btn btn-secondary" href="{{url('/')}}/admin/obras/all">
        Todas las obras
    </a>
    <a title="Detalles" class="btn btn-secondary" href="{{url('/')}}/admin/obras/vendidas">
        Obras Vendidas
    </a>
    <a title="Detalles" class="btn btn-secondary" href="{{url('/')}}/admin/obras/reservadas">
        Obras Reservadas
    </a>
    <a title="Detalles" class="btn btn-secondary" href="{{url('/')}}/admin/obras/disponibles">
        Obras Disponibles
    </a>
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
                     @if($row->Estado =='Disponible')
                        <td class="bg-success">{{ $row->Estado }}</td>
                     @endif
                     @if($row->Estado !='Disponible')
                        <td class="bg-danger">{{ $row->Estado }}</td>
                     @endif

                     <td class="bg-warning">{{ $row->Precio }}$</td>
                     <td class="bg-warning" ><img src="{{asset($row->img)}} " alt="{{$row->Name}}" width="100" height="100"></td>
                     <td class="bg-warning">{{ $row->artista->Name }}  {{ $row->artista->LastaName }}</td>
                     <td class="bg-succes">
                        @if($row->Estado =='Disponible')   
                        <a title="comprar" class="btn btn-primary" href="{{url('/')}}/admin/facturaCompletar/{{$row->id}}">
                            Comprar
                        </a>
                        @endif
                        <a title="Detalles" class="btn btn-success" href="{{url('/')}}/admin/obraDetalles/{{$row->id}}">
                            Detalles
                        </a>
                        <a title="gestionar" class="btn btn-warning" href="{{url('/')}}/admin/obraGestionarDetalles/{{$row->id}}">
                            Gestionar detalles
                        </a>
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
