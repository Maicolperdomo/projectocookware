<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recuperar contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body style="background-color: #c0dd8d;">
    <div class="container">
        <section class="section register d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-lg-4 col-md-6 d-flex flex-column align-items-center w-auto">
                        <img src="../image/logoG.png" alt="">
                     
                    </div><!--img-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">RECUPERAR CONTRASEÑA</h5>
                                <p class="text-center small">escriba su correo</p>
                            </div>
                          <!--  @include('layouts.messages')-->
                            <form class="row g-3" action="" method="post">
                                {{ csrf_field() }}
                                <div class="col-12">
                                    <label for="email" class="form-label">correo</label>
                                    <input type="email" name="email" class="form-control" id="txtCorreo" required>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success " type="submit">enviar</button>
                                </div>
                                <div class="col-12">
                                    <p class="small mb-0">¿NO TIENES UNA CUENTA? <a href="/register"> crear una cuenta</a></p>
                                   
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