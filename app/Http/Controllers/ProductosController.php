<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Sucursal;

class ProductosController extends Controller
{
    public function index(Request $request){
     $codigo = $request-> codigo;

      if(empty($codigo)){
        $productos = Producto::get()->load('sucursal');
             return view('productos.listado',['productos' => $productos, 'vacio' => false ]);
      }


          elseif(!empty($codigo)){
                   $producto = Producto::get()->where('producto_codigo', $codigo)->first()->load('sucursal');
                    if (isset ($producto)){
                  return view('productos.listado',['producto' => $producto, 'vacio' => false ]);
               }

          else{
                  return view('productos.listado',['vacio' => true ]);
               }
               }

            }


          //Crear y guardar nuevo 
    public function create(){
        $sucursales = Sucursal::get();
        return view('productos.crear')
            ->with('sucursales', $sucursales);
    }

    
    public function store(Request $request)
    {
        $this->validate($request, [
            'codigo' => 'required|unique:productos,producto_codigo',
            'nombre' => 'required',
            'categoria' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
            'sucursal' => 'required',
        ]);
    
        $productoExistente = Producto::where('producto_codigo', $request->codigo)->first();
    
        if ($productoExistente) {
            return redirect()->back()->with('error', 'El producto con este código ya existe.');
        }
        $producto = new Producto();
        $producto->producto_codigo = $request->codigo;
        $producto->producto_nombre = $request->nombre;
        $producto->producto_categoria = $request->categoria;
        $producto->producto_cantidad = $request->cantidad;
        $producto->producto_precio = $request->precio;
        $producto->descripcion = $request->descripcion;
        $producto->sucursal_id = $request->sucursal;
        $producto->save();
  
        $productos = Producto::get();
        return view('productos.listado', ['productos' => $productos]);
    }

    //Actualizar y Editar
public function update(Request $request, $productos){

  $this->validate($request, [
    'nombre' => 'required|string|max:50',
    'precio' => 'required|numeric|min:0',
    'descripcion' => 'required|string',
], [
    'nombre.required' => 'El campo nombre es obligatorio',
    'nombre.max' => 'El campo nombre no debe superar los 50 caracteres',
    'precio.required' => 'El campo precio es obligatorio',
    'precio.numeric' => 'El campo precio debe ser un valor numérico',
    'precio.min' => 'El campo precio no puede ser negativo',
    'descripcion.required' => 'El campo descripción es obligatorio',
]);


$producto_nombre = $request->input('nombre');
$producto_precio = $request->input('precio');
$descripcion = $request->input('descripcion');

  $producto = Producto::find($productos);
  $producto->producto_nombre = $request->nombre;
  $producto->producto_precio = $request->precio;
  $producto->descripcion =  $request-> descripcion;
  $producto->save();

  $productos = Producto::get();

  return view('productos.listado', ['productos' => $productos]);
}


 public function edit($productos){
   $producto = Producto::find($productos);
     return view('productos.edit', ['producto' => $producto]);
}

//Eliminar
public function destroy($producto_id)
{
    $producto = Producto::find($producto_id);
    $producto->delete();
    $productos = Producto::get();

    return view('productos.listado', ['productos' => $productos]);
}
}