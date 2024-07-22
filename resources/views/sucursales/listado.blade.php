@extends('layouts.master')

@section('title', 'Sucursales')
@section('content')
    <h2>Sucursales</h2>
    <table class="table border-success text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sucursales as $sucursal)
                <tr>
                    <th scope="row">{{ $sucursal->sucursal_id }}</th>
                    <td>{{ $sucursal->sucursal_nombre }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

   
@stop