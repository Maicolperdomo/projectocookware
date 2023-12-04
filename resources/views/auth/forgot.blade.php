<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #52ba66;">
    <div class="container">
        <section class="section register d-flex flex-column align-items-center justify-content-center py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-4 col-6 d-flex flex-column align-items-center w-auto">
                        <img src="../image/logoG.png" alt="">
                     
                    </div><!--img-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">RECUPERAR CONTRASEÑA</h5>
                                <p class="text-center small">Digite su correo electrónico</p>
                            </div>
                          <!--  @include('layouts.messages')-->
                          <form class="row g-3" action="{{ url('/forgot') }}" method="post">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label for="email" class="form-label">Correo Electrónico</label>
                                    <input type="email" name="email" class="form-control" id="txtCorreo" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn" style="background-color: #eb4e3d" type="submit">Enviar</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">¿NO TIENES UNA CUENTA?<a href="/register">  Crear una cuenta</a></p>
                                   
                                </div>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>