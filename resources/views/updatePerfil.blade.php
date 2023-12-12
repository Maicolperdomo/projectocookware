<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="js/actualizarperfil.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        @font-face {
            font-family: crema;
            src: url(font/CourierPrime-Regular.ttf);
        }
    </style>
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
                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Actualizar Perfil</h5>
                            </div>
                            @include('layouts.messages')
                            <form method="POST" action="/update">
                                @csrf
                                <div class="mb-3">
                                    <label for="txtNombre" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name"
                                        value="{{ auth()->user()->name }}" id="txtNombre">
                                </div>
                                <div class="mb-3">
                                    <label for="txtApellido" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="lastname"
                                        value="{{ auth()->user()->lastname }}" id="txtApellido">
                                </div>
                                <div class="mb-3">
                                    <label for="txtNickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control" name="nickname"
                                        value="{{ auth()->user()->nickname }}" id="txtNickname">
                                </div>
                                <div class="mb-3">
                                    <label for="txtCorreo" class="form-label">Correo</label>
                                    <input type="text" class="form-control" value="{{ auth()->user()->email }}"
                                        id="txtCorreo" disabled>
                                </div>
                                <input type="submit" value="Actualizar Perfil">
                                <div class="row mt-3 text-center">
                                    <a href="forgotpassword"> ¿Desea cambiar su contraseña? </a>
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
