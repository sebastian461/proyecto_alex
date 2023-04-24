<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('recursos/bootstrap-5.3.0-alpha2-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('recursos/css/sign-in.css') }}">
    <script src="{{ asset('recursos/bootstrap-5.3.0-alpha2-dist/js/bootstrap.bundle.min.js') }}"></script>

</head>
<body class="text-center">
    <main class="form-signin w-100 m-auto">
        <form action="" class="needs-validation" novalidate="">
            <h1 class="h3 mb-3 fw-normal">Ingreso</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="Usuario" required="">
                <label for="floatingInput">Usuario</label>
                <div class="valid-feedback">
                    Luce bien!
                </div>
                <div class="invalid-feedback">
                    Ingrese un nombre de usuario valido.
                </div>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" required="">
                <label for="floatingPassword">Contraseña</label>
                <div class="valid-feedback">
                    Luce bien!
                </div>
                <div class="invalid-feedback">
                    Ingrese una contraseña valida.
                </div>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
        </form>
    </main>

    <script src="{{ asset('recursos/js/sign-in.js') }}"></script>

</body>
</html>