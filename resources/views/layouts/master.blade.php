<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vista - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        body {
            background-color: #f8f9fa; /* Fondo gris claro */
        }
        .navbar {
            background-color: #28a745; /* Verde primario */
        }
        .navbar-brand,
        .navbar-nav .nav-link {
            color: #ffffff !important; /* Texto blanco */
        }
        .navbar-toggler-icon {
            background-color: #ffffff; /* Icono de hamburguesa blanco */
        }
        .container {
            margin-top: 20px; /* Margen superior */
        }
        .btn-outline-success {
            color: #28a745; /* Texto verde */
            border-color: #28a745; /* Borde verde */
        }
        .btn-outline-success:hover {
            background-color: #28a745; /* Fondo verde al pasar el ratón */
            color: #ffffff; /* Texto blanco al pasar el ratón */
        }
        /* Estilo para centrar el formulario */
        .center-form {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh; /* 100% del alto de la ventana */
        }
        /* Estilo para el formulario */
        form {
            background-color: #ffffff; /* Fondo blanco */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

@section('header')
<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BIENVENIDO</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="{{ url('') }}" class="nav-link active" aria-current="page">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('sucursales') }}" class="nav-link">Sucursales</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('login') }}" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('productos') }}" class="nav-link">Productos</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>
@show

<div class="container" >
    @yield('content')
</div>




@section('footer')
<footer class="footer mt-auto py-3">
    <div class="container">
        <span class="text-muted">© 2023 Gestión de Stock</span>
    </div>
</footer>
@show

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>