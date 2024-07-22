@extends('layouts.master')

@section('content')
<h1>Actualizar Producto </h1>
<form action="{{url('/productos/' .$producto->producto_id)}}" method="post">
 @method('PUT')
    <div class="form-group">
        <label for="nombre">Nombre del Producto</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->producto_nombre}}" required>
    </div>
    <div class="form-group">
        <label for="precio">Precio</label>
        <input type="number" class="form-control" id="precio" name="precio" value="{{$producto->producto_precio}}" required>
    </div>
    <div class="form-group">
        <label for="descripcion">Descripción</label>
        <input class="form-control" id="descripcion" name="descripcion" value="{{$producto->descripcion}}" required>
    </div> <br>
    <div class="form-group">
        <input type="submit" value="Actualizar" class="btn btn-success">
    </div>
    
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
</form>
@stop