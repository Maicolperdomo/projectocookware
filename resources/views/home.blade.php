<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../Js/axios.min.js"></script>
    <style>
        .ventana {
            background: #FD8C7E;
            width: 50%;
            height: 80%;
            min-height: 250px;
            border-radius: 22px;
            position: absolute;
            top: 12%;
            left: 35%;
            display: none;
        }
    </style>
</head>

@auth

    <body class="container-fluid">
        <div class="row">
            <div class="col-3" style="height: 606px;">
                <img src="../image/logo.png" alt="Logo" width="300" height="100">
                <div class="d-flex justify-content-center">
                    <img src="../image/61205.png" alt="..." style="width: 200px">
                </div>
                <div class="my-3">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">@ {{ auth()->user()->nickname }}</h5>
                    </div>
                    <ul class="text-left">
                        <li class="list-group-item">Cantidad de Recetas: </li>
                        <li class="list-group-item">Seguidores: </li>
                        <li class="list-group-item">Calificacion: </li>
                    </ul>
                    <div class="d-flex justify-content-around">
                        <a class="btn btn-primary" href="visitarPerfil">Visitar Perfil</a>
                        <a class="btn btn-primary" onclick="abrir()">Publicar Receta</a>
                    </div>
                    <div class="d-flex align-items-end justify-content-center" style="height: 140px">
                        <div class="btn-group dropup" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Configuracion
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actualizarPerfil">Actualizar Perfil</a></li>
                                <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-9 right my-3" style="background-color: white">
                <div>
                    <form class="d-flex justify-content-end" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            style="width: 25%;">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="row d-flex justify-content-around mt-4" style="background-color: #c0dd8d">
                    <div class="card" style="width: 18rem;">
                        <div class="d-flex justify-content-center"><img src="../image/61205.png" alt="..."
                                width="200" height="200"></div>
                        <div class="card-body">
                            <h5 class="card-title">Nombre Receta</h5>
                            <p class="card-text">Descrpción</p>
                        </div>
                        <div class="card-body">
                            <a href="visitarPerfil" class="card-link">Visitar Perfil</a>
                            <a href="visitarReceta" class="card-link">Visitar Receta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ventana overflow-auto" id="vent">
            <div class="my-4">
                <h1 class="text-center">ESCRIBE AQUÍ TU RECETA</h1>
                <div class="d-flex justify-content-center my-2">
                    <form action="/home" method="POST">
                        @csrf
                        <div>
                            <label for="formGroupExampleInput" class="form-label">Nombre Receta</label>
                            <input type="text" name="nombre" class="form-control" id="formGroupExampleInput"
                                placeholder="Cómo se llama tu receta?">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                            <input type="text" name="descripcion" class="form-control" placeholder="Describe tu receta brevemente">
                        </div>
                        <div class="row d-flex align-items-center">
                            <div class="col-6">
                                <label class="form-label">Ingredientes</label>
                                <div class="input-group mb-3">
                                    <input type="text" name="ingredientes" class="form-control" aria-label="Text input with dropdown button"
                                        placeholder="Ingrediente">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="unidad">Unidad:</label>
                                <div>
                                    <select name="unidad" id="unidad">
                                        @foreach ($unidades as $valor)
                                            <option value="{{ $valor }}">{{ $valor }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <a class="d-flex justify-content-end" href="">Agregar Ingrediente</a>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Pasos a Seguir</label>
                            <input type="text" name="pasos" class="form-control" id="formGroupExampleInput2"
                                placeholder="Se coherente en tu paso a paso">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Sube una foto</label>
                            <input type="file" name="foto" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="nivel">Nivel:</label>
                            <select name="nivel" id="nivel">
                                @foreach ($niveles as $valor)
                                    <option value="{{ $valor }}">{{ $valor }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label for="formGroupExampleInput" class="form-label">Tiempo estimado</label>
                            <input type="text" name="tiempo_estimado" class="form-control" id="formGroupExampleInput"
                                placeholder="Cuánto dura tu preparación?">
                        </div>
                        <div class="col-12 d-flex justify-content-center">
                            <div>
                                <input type="submit" class="btn btn-success" value="Publicar Recetas">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function abrir() {
                document.getElementById("vent").style.display = "block";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
