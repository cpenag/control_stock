@extends('layouts.master')
@section('title','HOME')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 offset-md-2">
                <h1>Bienvenido a la Aplicación de Control de Stock</h1>
                
            </div>
        </div>
        <div class="row justify-content-between">
			<div class="col-sm-6">
				<div class="alert">
				</div>
			</div>

        <div class="row text-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Productos en Stock</div>
                    <div class="card-body">
                        <p>141 productos en stock</p>
                        <a href="{{url('productos') }}" class="btn btn-success">Ver Productos</a>
                    </div>
                </div>
            </div>
     
        
            <div class="col-6">
                <div class="card">
                    <div class="card-header">Sucursales</div>
                    <div class="card-body">
                        <p>Actualmente tenemos 3 Sucursales.</p>
                        <a href="{{url('sucursales') }}" class="btn btn-success">Ver Sucursales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop