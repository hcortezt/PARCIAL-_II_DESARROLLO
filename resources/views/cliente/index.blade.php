@extends('layouts.app')
@section('content')
<div class="container">

    
    @if(Session::has('mensaje'))
    <div class="alert alert-success alert-dismissible" role="alert">
    {{ Session::get('mensaje')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true" > &times; </span>
    </button>
    </div>
    @endif

<a href="{{ url('cliente/create') }}" class="btn btn-success"> Registrar Nuevo Cliente </a>
<br/>
<br/>

<table class="table table-light">
    <thead class="thead-light">
        <!--encabezado-->
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Apellido </th>
            <th>Telefono</th>
            <th>Direccion</th>
            <th>DPI</th>
            <th>Acciones</th>
        </tr>
    </thead>
<!-- los campos que debe mostrar en la tabla-->
    <tbody>
        @foreach( $clientes as $cliente )
        <tr>
            <td>{{ $cliente->id }}</td>

            <td>
            <img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="100" alt="">
            </td>

            <td>{{ $cliente->Nombre }}</td>
            <td>{{ $cliente->Apellido }}</td>
            <td>{{ $cliente->Telefono }}</td>
            <td>{{ $cliente->Direccion }}</td>
            <td>{{ $cliente->DPI }}</td>
            <td>
                
            <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-warning" >
                Editar
            </a>
            
            <!--creamos el evento click y enviamos la informacion del cliente -->
            <form action="{{ url('/cliente/'.$cliente->id) }}" class="d-inline" method="post">
            @csrf 
            {{ method_field('DELETE') }}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres Borrar?')" 
            value="Borrar">

            </td>
            </form>
        </tr>
        @endforeach

    </tbody>

</table>
{!! $clientes->links() !!}
</div>
@endsection