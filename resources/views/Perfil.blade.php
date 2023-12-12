<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="../js/recetasPerfil.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @font-face {
            font-family: crema;
            src: url(font/CourierPrime-Regular.ttf);
        }
    </style>
</head>

@auth

    <body class="container-fluid colorletra">
        <div class="row">
            <div class="col-12 d-flex align-items-center" style="background-color: #f6f9fa">
                    <div class="col-9 text-center"><h1 class="display-4">RECETARIO</h1></div>
                    <div class="col-3"><a href="/home"><img src="../image/logo.png" alt="Logo" width="300" height="100"></a></div>
            </div>
            <div class="col-9 d-flex flex-wrap" id="searchResults" style="background-color: #76cc68">
            </div>
            <div class="col-3 right bg-light p-3">
                <input type="hidden" id="iduser" value="{{ $usuario->id }}">
                <div class="my-3 text-center fw-bolder">
                    <!-- Imprime la foto -->
                    <div class="d-flex justify-content-center">
                        <img src="{{ asset($usuario->foto) }}" alt="Foto Perfil" class="rounded-circle" width="200" height="200">
                    </div>
                    <br>
                    <!-- Imprime el nombre completo -->
                    <h3 class="card-title">{{ $usuario->name }} {{ $usuario->lastname }}</h3>
                    <!-- Imprime el nickname -->
                    <h5 class="card-title fw-bolder">{{ '@' . $usuario->nickname }}</h5>
                    <!-- Imprime la cantidad de recetas -->
                    <br>
                    <ul class="list-group text-center">
                        <li class="list-group-item">Cantidad de Recetas</li>
                        <li class="list-group-item">{{ $cantidadRecetas }}</li>
                        <!-- Puedes agregar más información aquí según tus necesidades -->
                    </ul>
                </div>
            </div>
            
        </div>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
