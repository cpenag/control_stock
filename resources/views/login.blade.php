@extends('layouts.master')

@section('title','Login Administrador')
@section('content')
    <form action="{{ url('recibe') }}" method="post">
        @csrf       
        <h2>Iniciar Sesión</h2>
        <div class="form-group">            
            <label for="usuario">ID de Usuario</label>             
            <input type="text" class="form-control" id="usuario" placeholder="Ingrese su ID de Usuario" name="usuario" required>
        </div>
        <div class="form-group">
            <label for="contrasena">Contraseña</label>
            <input type="password" class="form-control" id="contrasena" placeholder="Contraseña" name="contrasena"required>
        </div>
        <button type="submit" class="btn btn-primary">Iniciar Sesión</button>  

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