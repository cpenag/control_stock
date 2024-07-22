<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;

class SucursalesController extends Controller
{
    public function index(){
        $sucursales = Sucursal::get();
 
    return view('sucursales.listado',['sucursales' => $sucursales ]);
    }
    public function create(){
        return view('sucursales.crear');
   
    
    }
    public function store (Request $request){
        $this->validate($request, [
         'sucursal' => 'required',
     ]);
    }

}