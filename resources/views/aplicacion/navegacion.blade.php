<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('recursos/css/aplicacion.css') }}">
    <link rel="stylesheet" href="{{ asset('recursos/css/tabla.css') }}">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('recursos/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('recursos/bootstrap-5.3.0-alpha2-dist/js/bootstrap.bundle.min.js') }}"></script>

    @yield('estilos')

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('rol') }}">Rol</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Personal</a></li>
                    </ul>
                    <a class="nav-link" href="#">Log-out</a>
                </div>                
            </div>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>