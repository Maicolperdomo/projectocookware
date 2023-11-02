<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="./assets/Js/bootstrap.js"></script>
    <script src="./assets/Js/axios.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container-fluid">
    <div class="row" style="height: 606px;">
        <div class="col-3">
            <img src="../image/logo.png" alt="Logo" width="300" height="100">
            <div class="d-flex justify-content-center">
                <img src="../image/61205.png" alt="..." style="width: 200px">
            </div>
            <div class="my-3">
                <div class="d-flex justify-content-center">
                    <h5 class="card-title">@Nickname</h5>
                </div>
                <ul class="text-left">
                    <li class="list-group-item">Cantidad de Recetas: </li>
                    <li class="list-group-item">Seguidores: </li>
                    <li class="list-group-item">Calificacion: </li>
                </ul>
            </div>
            <div class="d-flex align-items-end" style="height: 178px;">
                <div>
                    <a href="actualizarPerfil" class="btn btn-primary">Actualizar Perfil</a>
                    <a href="loguin" class="btn btn-warning">Cerrar Sesion</a>
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
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
