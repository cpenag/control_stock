@extends('layouts.master')

@section('content')

<h1>Crear Sucursal </h1>
    <form action="{{url('/sucursales')}}" method="post">
     @csrf  
        
         <div class="form-group">
            <label for="surcursal">Sucursal</label>
            <input class="form-control" id="sucursal" name="sucursal"></input>
        </div>
      
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@stop