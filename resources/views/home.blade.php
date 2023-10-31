<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .vl {
            border-left: 6px solid green;
            height: 500px;
            position: absolute;
            left: 25%;
            margin-left: -3px;
            top: 0;
        }
    </style>
</head>

<body class="container-fluid">
    <div class="row my-3">
        <div class="col-4">
            <a href="#">
                <img src="../image/logosmall.png" alt="Logo" width="70" height="70">
            </a>
            <h1 class="d-inline-block align-text-center mx-3">Cookware</h1>
        </div>
        <div class="col-8 d-flex justify-content-center">
            <div class="mx-3">
                <input class="form-control" type="search" placeholder="Buscar receta" aria-label="Search">
            </div>
            <div>
                <button class="btn btn-outline-success align-content-center" type="submit">Buscar</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-3 d-flex justify-content-center" style="height: 500px">
            <div>
                <img src="../image/61205.png" alt="..." style="width: 200px">
                <div>
                    <h5 class="text-center">@Nickname</h5>
                </div>
                <div>
                    <li class="list-group-item text-center">Cantidad Recetas</li>
                    <li class="list-group-item text-center">Seguidores</li>
                    <li class="list-group-item text-center">Calificacion</li>
                </div>
                <div class="flex-wrap align-items-end">
                    <a href="#">Actualizar Perfil</a>
                    <a href="#">Cerrar sesion</a>
                </div>
            </div>
        </div>
        <div class="col-9 right bg-primary">
            <h1>hola</h1>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
