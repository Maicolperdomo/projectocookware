<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Publicar Receta</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="./assets/Js/bootstrap.js"></script>
    <script src="./assets/Js/axios.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-around align-items-center">
            <div class="col-3">
                <img src="../image/logo.png" alt="Logo" width="300" height="100">
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-center">
                    <img src="../image/61205.png" alt="..." style="width: 100px">
                </div>
            </div>
            <div class="col-3">
                <div class="d-flex justify-content-between">
                    <ul>
                        <h5 class="card-title">@Nickname</h5>
                        <li class="list-group-item">Cantidad de Recetas: </li>
                        <li class="list-group-item">Seguidores: </li>
                        <li class="list-group-item">Calificacion: </li>
                    </ul>
                </div>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Configuracion
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="actualizarPerfil">Actualizar Perfil</a></li>
                        <li><a class="dropdown-item" href="loguin">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div style="background-color: #c0dd8d">
            <form class="my-5">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de la Receta</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Descripcion</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputState" class="col-sm-2 col-form-label">Unidad</label>
                    <div class="col-sm-10 d-flex justify-content-center">
                        <input type="text" class="form-control me-4" id=""
                            placeholder="Nombre del Ingrediente">
                        <select id="inputState" class="form-select form-control">
                            <option selected>unidades</option>
                        </select>
                    </div>
                    <div class="d-flex flex-row-reverse my-4">
                        <a href="" class="btn btn-primary">Agregar campo</a>
                    </div>
                </div>
            </form>
            <div class="container-fluid">
                <div class="col-row">
                    <div class="col-6 d-flex justify-content-around">
                        <div class="col-3">
                            <label for="" class="col-sm-2 col-form-label">Nivel</label>
                            <div class="col-sm-8">
                                <select id="" class="form-select form-control">
                                    <option selected>unidades</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Tiempo</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                    </div>
                    <div class="col-6 justify-content-center">
                        <a type="submit" class="btn btn-primary">Subir Foto</a>
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <div>
                    <a type="submit" class="btn btn-primary">Publicar Receta</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
