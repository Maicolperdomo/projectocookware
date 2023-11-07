<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body class="container-fluid">
    <div class="row">
        <div class="col-3 left align-self-center">
            <div class="row align-items-start">
                <div class="col">
                    <img src="../image/logo.png" alt="">
                </div>
                <div class="row">
                    <div class="col-8">
                        <img src="../image/perfil.png" alt="..." class="img-user">
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h2 class="justify-content-center">@Nickname</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h5>54 - Recetas</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <h5>384 - Seguidores</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <h5>Calificación</h5>
                            </div>
                            <div class="col">
                                <img src="../image/star.png" alt="" class="img-star">
                            </div>
                            <div class="col">
                                <img src="../image/star.png" alt="" class="img-star">
                            </div>
                            <div class="col">
                                <img src="../image/star.png" alt="" class="img-star">
                            </div>
                            <div class="col">
                                <img src="../image/star.png" alt="" class="img-star">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary">Publicar Receta</button>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary">Ver Recetas</button>
                    </div>
                </div>
                <div class="row btn-down">
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary">Actualizar perfil</button>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-outline-primary">Cerrar Sesión</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-9 right content-s">
            <div class="scrollable-right">
                <div class="container-so">
                    <nav class="navbar">
                        <div clas="d-flex">
                            <form class="d-flex" role="search">
                                <input class="form-control me-2" type="search" aria-label="Search">
                                <button type="button" class="btn btn-primary">Buscar</button>
                            </form>
                        </div>
                    </nav>
                    <br>
                    <div class="card">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="row justify-content-center">
                                    <div class="row">
                                        <div class="col-8">
                                            <img src="../image/perfil.png" alt="..." class="img-user">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <h2 class="justify-content-center">@Nickname</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <h3>Calificación</h3>
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h1 class="card-title text-center">Nombre Receta</h1>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="card-subtitle mb-2">Descripción:</h4>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias molestiae nobis laudantium voluptatem molestias dolore ipsam officia dignissimos assumenda consequuntur non aperiam, culpa itaque unde ratione expedita. Reprehenderit, quod et.</p>
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Perfil</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Reseta</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img src="./image/comida.webp" alt="" class="img_view_receta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="row justify-content-center">
                                    <div class="row">
                                        <div class="col-8">
                                            <img src="../image/perfil.png" alt="..." class="img-user">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <h2 class="justify-content-center">@Nickname</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <h3>Calificación</h3>
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                                <div class="col">
                                                    <img src="../image/star.png" alt="" class="img-star">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h1 class="card-title text-center">Nombre Receta</h1>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="card-subtitle mb-2">Descripción:</h4>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias molestiae nobis laudantium voluptatem molestias dolore ipsam officia dignissimos assumenda consequuntur non aperiam, culpa itaque unde ratione expedita. Reprehenderit, quod et.</p>
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Perfil</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Reseta</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img src="./image/olla.png" alt="" class="img_view_receta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="card">
                        <div class="row">
                            <div class="col-4 align-self-center">
                                <div class="row justify-content-center">
                                    <div class="row">
                                        <div class="col-8">
                                            <img src="../image/perfil.png" alt="..." class="img-user">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-8">
                                            <h2 class="justify-content-center">@Nickname</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="row">

                                                    <div class="rating">
                                                        <span class="star" data-rating="1">&#9733;</span>
                                                        <span class="star" data-rating="2">&#9733;</span>
                                                        <span class="star" data-rating="3">&#9733;</span>
                                                        <span class="star" data-rating="4">&#9733;</span>
                                                        <span class="star" data-rating="5">&#9733;</span>
                                                      </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h1 class="card-title text-center">Nombre Receta</h1>
                                    <div class="row">
                                        <div class="col">
                                            <h4 class="card-subtitle mb-2">Descripción:</h4>
                                            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Alias molestiae nobis laudantium voluptatem molestias dolore ipsam officia dignissimos assumenda consequuntur non aperiam, culpa itaque unde ratione expedita. Reprehenderit, quod et.</p>
                                            <div class="row">
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Perfil</button>
                                                </div>
                                                <div class="col">
                                                    <button type="button" class="btn btn-primary">Visitar Reseta</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <img src="./image/olla.png" alt="" class="img_view_receta">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"></script>
</body>
</html>
