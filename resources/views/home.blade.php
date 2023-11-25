<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlQ/l9UqQpgzjwE6R5Y1PmSvIep0n2EC5g9d07ePZXdL" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

<body class="container-fluid my-3" style="background-color: #c0dd8d;">

    <form class="d-flex justify-content-end" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="width: 25%;">
        <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
    <div class="row" style=" background-color:#c0dd8d;">
        <div class="col-3" style="height: 606px;">
            <img src="./image/logo.png" alt="Logo" width="300" height="100">
           
            <div class="my-3">
                <div class="col-10">
                    <div id="list-example" class="list-group">
                        <a class="list-group-item list-group-item-action" href="visitarPerfil">Perfil</a>
                        <br>
                        <a class="list-group-item list-group-item-action" onclick="abrir()" href="">Publicar Receta</a>
                        <li class="nav-item dropdown">
                            <a class="list-group-item list-group-item-action" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Mas
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="actualizarPerfil">Configuracion</a></li>
                                <li><a class="dropdown-item" href="/logout">Cerrar Sesion</a></li>
                            </ul>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class=" card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
                <a href="visitarPerfil" class="list-group-item"> {{ auth()->user()->nickname }}</a>
        </ul>       
            <img src="../image/R.jpeg"  alt="...">
            <div class="card-body">
                <h5 class="card-title">Sopa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
                <a href="visitarReceta" class="card-link">visitar Receta</a>
            </div>
        </div>
        <div class=" card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
                <a href="visitarPerfil" class="list-group-item"> {{ auth()->user()->nickname }}</a>
        </ul>       
            <img src="../image/OIP.jpeg"  alt="...">
            <div class="card-body">
                <h5 class="card-title">Camaron</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
                <a href="visitarReceta" class="card-link">visitar Receta</a>
            </div>
        </div>
        <div class=" card" style="width: 18rem;">
        <ul class="list-group list-group-flush">
                <a href="visitarPerfil" class="list-group-item"> {{ auth()->user()->nickname }}</a>
        </ul>       
            <img src="../image/ban.jpeg"  alt="...">
            <div class="card-body">
                <h5 class="card-title">Bandeja Paisa</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
            <div class="card-body">
                <a href="visitarReceta" class="card-link">visitar Receta</a>
            </div>
        </div>
    
    <!--  <div class="my-3">
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
                </div>-->



    <!--  <div class="row d-flex justify-content-around mt-4" style="background-color: #c0dd8d">
                <div class="card" style="width: 18rem;">
                    <div class="d-flex justify-content-center"><img src="../image/61205.png" alt="..." width="200" height="200"></div>
                    <div class="card-body">
                        <h5 class="card-title">Nombre Receta</h5>
                        <p class="card-text">Descripción</p>
                    </div>
                    <div class="card-body">
                        <a href="visitarPerfil" class="card-link">Visitar Perfil</a>
                        <a href="visitarReceta" class="card-link">Visitar Receta</a>
                    </div>
                </div>
            </div>-->

    <!--  <div class="col-9 right my-3" style="background-color:green">
        <form class="d-flex justify-content-end" role="search">
            <input class="form-control me-2" type="search" placeholder="" aria-label="Search" style="width: 25%;">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
    </div>-->



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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

@endauth

@guest
<p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>