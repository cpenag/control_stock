<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function registro()
    {
        return view("login");
    }
   
    public function formulario(Request $request)
    {
        $this->validate($request, [
            'usuario' => 'required',
            'contrasena' => 'required', 
        ], [
            'usuario.required' => 'El campo usuario es obligatorio',
            'contrasena.required' => 'El campo contraseña es obligatorio',
        ]);
    
        $usuario = $request->input('usuario');
        $contrasena = $request->input('contrasena');
       
        dd($usuario . " - " . $contrasena);
    }

}


    
