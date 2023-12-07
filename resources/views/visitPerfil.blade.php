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
    <link rel="stylesheet" href="css/style.css">
    <script src="js/publicarRec.js"></script>

</head>

@auth

    <body class="container-fluid colorletra">
        <div class="row" style="background-color: #f6f9fa">
            <div class="col-12 d-flex align-items-center">
                <div class="col-4">
                    <a href="/home"><img src="../image/logo.png" alt="Logo" width="300" height="100"></a> 
                </div>
                <div class="col-8 d-flex justify-content-around">
                    <div>
                        <form class="d-flex justify-content-center" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                style="width: 55%;">
                            <button class="btn fw-bolder" style="background-color: #52ba66" type="submit">Search</button>
                        </form>
                    </div>
                    <div>
                        <select id="Nivel" class="form-control w-auto fw-bolder">
                            <option selected disabled>Filtrar</option>
                        </select>
                    </div>
                    <div>
                        <div class="btn-group dropdown" role="group">
                            <button type="button" class="btn fw-bolder" data-bs-toggle="dropdown"
                                aria-expanded="false" style="background-color: #eb4e3d">
                                {{ auth()->user()->nickname }}
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actualizarPerfil">Actualizar Perfil</a></li>
                                <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-3" style="background-color: #f6f9fa">
                <div class="my-3  fw-bolder">
                    <div class="d-flex justify-content-center"><img src="{{ asset(auth()->user()->foto) }}"
                            alt="Foto Perfil" width="200" height="200" style="border-radius: 50%"></div>
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title fw-bolder">{{ '@' . auth()->user()->nickname }}</h5>
                    </div>
                    <ul class="text-left">
                        <li class="list-group-item" id="cantidadRecetas">Cantidad de Recetas: </li>
                        <li class="list-group-item">Seguidores: </li>
                        <li class="list-group-item">Calificacion: </li>
                    </ul>
                    <div class="d-flex justify-content-around">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn fw-bolder" data-bs-toggle="modal"
                            data-bs-target="#staticBackdrop" style="background-color: #eb4e3d">
                            Publicar Receta
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-9 right d-flex flex-wrap" style="background-color: #76cc68" id="tablaReceta">
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content" style="background-color: #f6f9fa">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 fw-bolder" id="staticBackdropLabel">ESCRIBE AQUÍ TU RECETA</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="visper" enctype="multipart/form-data" id="miFormularioId">
                            @csrf
                            <div>
                                <input type="hidden" name="id" class="form-control" id="iduser" value="{{auth()->user()->id}}" disabled>
                            </div>
                            <div>
                                <label for="nomb" class="form-label fw-bolder">Nombre Receta</label>
                                <input type="text" name="nombre" class="form-control" id="nomb"
                                    placeholder="Cómo se llama tu receta?">
                            </div>
                            <div class="mb-3">
                                <label for="descrip" class="form-label fw-bolder">Descripción</label>
                                <input type="text" name="descripcion" class="form-control"
                                    placeholder="Describe tu receta brevemente" id="descrip">
                            </div>
                            <div id="ingredientesContainer">
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="button" class="btn btn-link fw-bolder" onclick="agregarIngrediente()">Agregar
                                    Ingrediente</button>
                            </div>
                            <div class="mb-3">
                                <label for="pasosa" class="form-label fw-bolder">Pasos a Seguir</label>
                                <input type="text" name="pasos" class="form-control" id="pasosa"
                                    placeholder="Se coherente en tu paso a paso">
                            </div>
                            <div class="mb-3">
                                <label for="subirf" class="form-label fw-bolder">Sube una foto</label>
                                <input type="file" name="subirf" multiple accept="image/*" class="form-control"
                                    id="subirf">
                            </div>
                            <div class="mb-3 fw-bolder">
                                <label for="txtNivel">Nivel:</label>
                                <select id="txtNivel" class="form-control w-auto">
                                    <option selected disabled>Seleccionar</option>
                                </select>
                            </div>
                            <div>
                                <label for="tiempoe" class="form-label fw-bolder">Tiempo estimado</label>
                                <input type="time" name="tiempo_estimado" class="form-control" id="tiempoe"
                                    placeholder="Cuánto dura tu preparación?">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <div>
                            <!-- Cambia el tipo de botón a "button" para evitar enviar el formulario directamente -->
                            <button type="submit" class="btn fw-bolder" id="btnPublicarReceta"
                                 style="background-color: #eb4e3d" onclick="guardar()">Publicar Receta</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
