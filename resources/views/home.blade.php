<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/recetasHome.js"></script>
</head>

@auth

    <body class="container-fluid" style="background-color: #76cc68">
        <header class="row" style="background-color: #f6f9fa">
            <div class="col-12 d-flex align-items-center">
                <div class="col-4">
                    <img src="../image/logo.png" alt="Logo" width="300" height="100">
                </div>
                <div class="col-8 d-flex justify-content-around">
                    <div>
                        <form class="d-flex justify-content-center" role="search" id="searchForm" data-route="{{ route('recetas.autocomplete') }}">
                            <input class="form-control me-2" type="text" id="search" name="search" aria-label="Search" autocomplete="off" style="width: 55%;">
                            <button class="btn fw-bolder" style="background-color: #52ba66" type="submit">Search</button>
                        </form>
                    </div>
                    <div>
                        <div>
                            <select id="txtNivel" class="form-control w-auto">
                                <option selected disabled>Filtrar</option>
                            </select>
                        </div>
                        <div>
                            <div class="btn-group dropup" role="group">
                                <button type="button" class="btn btn-primary" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ auth()->user()->nickname }}
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="visper">Ir a Perfil</a></li>
                                    <li><a class="dropdown-item" href="/actualizarPerfil">Actualizar Perfil</a></li>
                                    <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
        </header>
        <div class="col-12 d-flex flex-wrap justify-content-around" id="searchResults">
        </div>
        <div class="col-12 d-flex justify-content-center my-3">
            <button class="btn btn-primary">Actualizar</button>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
