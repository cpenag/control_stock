@extends('layouts.master')

@section('content')

<h1>Crear Producto </h1>
    <form action="{{url('/productos')}}" method="post">
     @csrf  
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" class="form-control" id="codigo" name="codigo" required>
        </div>
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <input type="text" class="form-control" id="categoria" name="categoria" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
        </div>

        <div class="form-group">
            <label for="sucursal">Sucursal</label>
        <select class="form-select" aria-label="Default select example"  id="sucursal" name="sucursal" >
        <option selected>Seleccione Sucursal</option>
        @foreach ($sucursales as $sucursal)
        <option value="{{ $sucursal -> sucursal_id}}">{{$sucursal->sucursal_nombre}}</option>
        @endforeach
</select>
</div>
        <button type="submit" class="btn btn-primary">Guardar Producto</button>

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