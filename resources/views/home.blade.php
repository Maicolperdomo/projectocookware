<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
                    <form action="{{ route('buscarRecetas') }}" method="GET" class="d-flex justify-content-center" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 55%;" name="nombre">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    @if (isset($recetas))
                    @if (count($recetas) > 0)
                    <h2>Resultados de la búsqueda para "{{ $busqueda }}"</h2>
                    <ul>
                        @foreach ($recetas as $receta)
                        <li>{{ $receta->nombre }}</li>
                        @endforeach
                    </ul>
                    @else
                    <p>No se encontraron recetas para "{{ $busqueda }}"</p>
                    @endif
                    @endif
                </div>
                <div>
                    <!--- <select id="txtNivel" class="form-control w-auto">
                            <option selected disabled>Filtrar</option>
                        </select>-->
                    <form action="{{ route('filterByNivel') }}" method="GET" class="d-flex justify-content-center">
                        <select id="txtNivel"  name="nivel" class="form-control w-auto">
                        <option selected disabled>Filtrar</option>
                        </select>
                    </form>
                </div>
                <div>
                    <div class="btn-group dropup" role="group">
                        <button type="button" class="btn btn-primary" data-bs-toggle="dropdown" aria-expanded="false">
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
    <div class="col-12 d-flex flex-wrap justify-content-around" id="tablaReceta">
    </div>
    <div class="col-12 d-flex justify-content-center my-3">
        <button class="btn btn-primary">Actualizar</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

@endauth

@guest
<p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>