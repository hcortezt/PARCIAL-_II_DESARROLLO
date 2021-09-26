<h1>{{ $modo }} cliente </h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
<ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
</ul>
    </div>


@endif


<div class="form-group">
<label for="Nombre"> Nombre </label>
<input type="text" class="form-control" name="Nombre" 
value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre') }}" id="Nombre">
</div>


<div class="form-group">
<label for="Apellido"> Apellido </label>
<input type="text" class="form-control" name="Apellido" 
value="{{ isset($cliente->Apellido)?$cliente->Apellido:old('Apellido') }}" id="Apellido">
</div>


<div class="form-group">
<label for="Telefono"> Telefono </label>
<input type="text" class="form-control" name="Telefono" 
value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono') }}" id="Telefono">
</div>


<div class="form-group">
<label for="Direccion"> Direccion </label>
<input type="text" class="form-control" name="Direccion" 
value="{{ isset($cliente->Direccion)?$cliente->Direccion:old('Direccion') }}" id="Direccion">
</div>

<div class="form-group">
<label for="DPI"> DPI </label>
<input type="text" class="form-control" name="DPI" 
value="{{ isset($cliente->DPI)?$cliente->DPI:old('DPI') }}" id="DPI">
</div>

<div class="form-group">
<label for="Foto"> </label>
@if(isset($cliente->Foto))
<img class="img-thumbnail img-fluid" src="{{ asset('storage').'/'.$cliente->Foto }}" width="150" alt="">
@endif
<input type="file" class="form-control" name="Foto" value="" id="Foto">
</div>


<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-primary" href="{{ url('cliente/') }}"> Regresar </a>

<br>