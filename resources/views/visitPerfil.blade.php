<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="js/publicarRec.js"></script>
    <style>
        .ventana {
            background: #FD8C7E;
            width: 50%;
            height: 85%;
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
        <div class="col-12 bg-white">
            <div class="col-12 d-flex align-items-center">
                <div class="col-4">
                    <img src="../image/logo.png" alt="Logo" width="300" height="100">
                </div>
                <div class="col-8 d-flex justify-content-around">
                    <div>
                        <form class="d-flex justify-content-center" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                style="width: 55%;">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </div>
                    <div>
                        <select id="txtNivel" class="form-control w-auto">
                            <option selected disabled>Filtrar</option>
                        </select>
                    </div>
                    <div>
                        <div class="btn-group dropdown" role="group">
                            <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-regular fa-user-gear"></i>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actualizarPerfil">Actualizar Perfil</a></li>
                                <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <div class="my-3">
                        <div class="d-flex justify-content-center"><img src="../image/61205.png" alt="..."
                            width="200" height="200"></div>
                        <div class="d-flex justify-content-center">
                            <h5 class="card-title">@ {{ auth()->user()->nickname }}</h5>
                        </div>
                        <ul class="text-left">
                            <li class="list-group-item">Cantidad de Recetas: </li>
                            <li class="list-group-item">Seguidores: </li>
                            <li class="list-group-item">Calificacion: </li>
                        </ul>
                        <div class="d-flex justify-content-around">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">
                                Publicar Receta
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-9 right my-3" style="background-color: #c0dd8d">
                    <div>
                        <div class="row d-flex justify-content-around mt-4">
                            <div class="card" style="width: 18rem;">
                                <div class="d-flex justify-content-center"><img src="../image/61205.png" alt="..."
                                        width="200" height="200"></div>
                                <div class="card-body">
                                    <h5 class="card-title">Nombre Receta</h5>
                                    <p class="card-text">Descrpción</p>
                                </div>
                                <div class="card-body d-flex justify-content-center">
                                    <!--<a href="visitarPerfil" class="card-link">Visitar Perfil</a>!-->
                                    <a href="visrec" class="card-link">Visitar Receta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">ESCRIBE AQUÍ TU RECETA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            @csrf
                            <div>
                                <label for="formGroupExampleInput" class="form-label">Nombre Receta</label>
                                <input type="text" name="nombre" class="form-control" id="nomb"
                                    placeholder="Cómo se llama tu receta?">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Descripción</label>
                                <input type="text" name="descripcion" class="form-control"
                                    placeholder="Describe tu receta brevemente" id="descrip">
                            </div>
                            <div class="col d-flex justify-content-evenly align-items-center">
                                <div class="me-2">
                                    <label class="form-label">Ingredientes</label>
                                    <div>
                                        <input type="text" name="ingredientes" class="form-control"
                                            aria-label="Text input with dropdown button" placeholder="Ingrediente"
                                            id="ingred">
                                    </div>
                                </div>
                                <div class="me-2">
                                    <label class="form-label">Cantidad</label>
                                    <div>
                                        <input type="number" name="cantidad" class="form-control"
                                            aria-label="Text input with dropdown button" placeholder="cantidad"
                                            id="cant">
                                    </div>
                                </div>
                                <div>
                                    <label class="form-label" for="txtUnidad">Unidad:</label>
                                    <div>
                                        <select id="txtUnidad" class="form-control">
                                            <option selected disabled>Seleccionar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <a href="">Agregar Ingrediente</a>
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput2" class="form-label">Pasos a Seguir</label>
                                <input type="text" name="pasos" class="form-control" id="pasosa"
                                    placeholder="Se coherente en tu paso a paso">
                            </div>
                            <div class="mb-3">
                                <label for="formGroupExampleInput" class="form-label">Sube una foto</label>
                                <input type="file" name="file" class="form-control" id="subirf">
                            </div>
                            <div class="mb-3">
                                <label for="txtNivel">Nivel:</label>
                                <select id="txtNivel" class="form-control w-auto">
                                    <option selected disabled>Seleccionar</option>
                                </select>
                            </div>
                            <div>
                                <label for="formGroupExampleInput" class="form-label">Tiempo estimado</label>
                                <input type="time" name="tiempo_estimado" class="form-control" id="tiempoe"
                                    placeholder="Cuánto dura tu preparación?">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <a type="submit" class="btn btn-success" onclick="guardar()">Publicar Receta</a>
                        </div>
                    </div>
                </div>
            </div>
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
