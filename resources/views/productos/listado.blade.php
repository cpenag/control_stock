@extends('layouts.master')

@section('title','Productos')
@section('content')
    <h2>Productos</h2>
    @if (isset($vacio) && $vacio == true)
    <p> No se ha encontrado la búsqueda</p>
    @else
    
    <table class="table border-success">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Categoría</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Precio</th>
                <th scope="col">Descripción</th>
                <th scope="col">Sucursal</th>
                <th scope="col">Acciones</th> 
                <th scope="col">Acciones</th> 
                
            </tr>
        </thead>
        <tbody>
            @if (isset($productos))
            @foreach ($productos as $producto)
            <tr>
                <th scope="row">{{ $producto->producto_id }}</th>
                <td>{{ $producto->producto_codigo }}</td>
                <td>{{ $producto->producto_nombre }}</td>
                <td>{{ $producto->producto_categoria }}</td>
                <td>{{ $producto->producto_cantidad }}</td>
                <td>{{ $producto->producto_precio }}</td>
                <td>{{ $producto->descripcion }}</td>
                <td>{{ $producto->sucursal->sucursal_nombre }}  (ID Sucursal :{{$producto->sucursal->sucursal_id}})</td>
                <td>
                    <a type="button" href="/productos/{{$producto->producto_id}}/edit" class="btn btn-success">Editar </a>
                </td>
                <td>

                    <form action="{{ url('/productos/'.$producto->producto_id) }}" method="POST" onsubmit="return confirmarEliminacion()">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar producto</button>
                    </form>
                    
                    <script>
                        function confirmarEliminacion() {
                            return confirm('¿Estás seguro de que deseas eliminar este producto?');
                        }
                    </script>
                  
                </td>

            </tr>
        @endforeach
                @else
                <tr>
                    <th scope="row">{{ $producto->producto_id }}</th>
                    <td>{{ $producto->producto_codigo }}</td>
                    <td>{{ $producto->producto_nombre }}</td>
                    <td>{{ $producto->producto_categoria }}</td>
                    <td>{{ $producto->producto_cantidad }}</td>
                    <td>{{ $producto->producto_precio }}</td>
                    <td>{{ $producto->descripcion }}</td>
                   <td>{{ $producto->sucursal->sucursal_nombre }}  (ID Sucursal :{{$producto->sucursal->sucursal_id}})</td> 
                </tr>
            @endif
        </tbody>
    </table> 
    @endif
   
<div class="form-group">  
    <form method="get">
         <label for="codigo" class="text-success">Buscar producto por código:</label>
              <input type="text" name="codigo" id="codigo">
             <button type="submit" class="btn btn-success"> Buscar</button>
     </form>
</div>


@stop
