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
            width: 70%;
            height: 80%;
            padding: 5px;
            min-height: 250px;
            border-radius: 22px;
            position: absolute;
            top: 12%;
            left: 25%;
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
        <div class="ventana" id="vent">
            <h1 class="text-center">ESCRIBE AQUI TU RECETA</h1>
            <!--<form class="my-1">
                                                        <div class="row mb-2">
                                                            <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de la Receta</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="txtNombre">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-2">
                                                            <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion</label>
                                                            <div class="col-sm-5">
                                                                <input type="text" class="form-control" id="txtDescripcion">
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="inputState" class="col-sm-2 col-form-label">Ingredientes</label>
                                                            <div class="col-sm-10 d-flex justify-content-center">
                                                                <input type="text" class="form-control me-4" id="txtIngredientes"
                                                                    placeholder="Nombre del Ingrediente">
                                                                <select class="form-select form-control">
                                                                    <option selected>unidades</option>
                                                                </select>
                                                            </div>
                                                            <div class="d-flex flex-row-reverse my-4">
                                                                <a href="" class="btn btn-primary">Agregar campo</a>
                                                            </div>
                                                        </div>
                                                    </form>!-->
            <div class="col-12 d-flex justify-content-center">
                <div>
                    <a class="btn btn-primary" id="btnRegistrar" onclick="registrar()">Publicar Receta</a>
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
