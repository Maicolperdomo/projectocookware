<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="../Js/axios.min.js"></script>
</head>

@auth

<body class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-center" style="background-color: white">
            <div class="col-5">
                <img src="../image/logo.png" class="img-logo" alt="Logo">
            </div>
            <div class="col-7 d-flex flex-row-reverse bd-highlight">
                <div>
                    <form class="d-flex justify-content-end" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            style="width: 25%;">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
        {{-- <div class="row" style="background-color: #c0dd8d">
            <div class="d-flex align-items-center">
                <div class="d-flex flex-nowrap bd-highlight">
                    <div class="col">
                        <div class="card h-100">
                            <img src="../image/pastel.jpg" style="width: 200px" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">NOMBRE RECETA</h5>
                                <p class="card-text">DESCRIPCION</p>
                                <div class="d-flex justify-content-around">
                                    <a class="btn btn-primary" href="visitarPerfil">Visitar Perfil</a>
                                    <a class="btn btn-primary" onclick="abrir()">Publicar Receta</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="background-color: #c0dd8d">
        <div class="d-flex align-items-center">
            <div class="d-flex flex-nowrap bd-highlight">
                <div class="col">
                    <div class="card h-100">
                        <img src="../image/pastel.jpg" style="width: 200px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">NOMBRE RECETA</h5>
                            <p class="card-text">DESCRIPCION</p>
                            <div class="d-flex justify-content-around">
                                <a class="btn btn-primary" href="visitarPerfil">Visitar Perfil</a>
                                <a class="btn btn-primary" onclick="abrir()">Publicar Receta</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container">
        <div class="row def-low">
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="#"><i class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hF-50">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i
                                    class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i
                                    class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i 
                                class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">  
        <div class="row def-low">
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i
                                    class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card hF-50">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i
                                    class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i
                                    class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-40">
                    <img src="../image/tarta.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">NOMBRE RECETA</h5>
                        <p class="card-text">DESCRIPCION</p>
                        <div class="d-flex justify-content-around">
                            <a class="btn btn-primary" href="visitarPerfil"><i
                                    class="fa-solid fa-eye-low-vision fa-bounce"></i></a>
                            <a class="btn btn-primary" onclick="abrir()"><i 
                                class="fa-sharp fa-solid fa-upload fa-bounce"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <a href="{{ route('publicReceta') }}">Ver receta</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
