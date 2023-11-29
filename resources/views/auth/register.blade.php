<!doctype html>
<html lang="es">

<head>
    <title>REGISTRO</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body class="container-fluid" style="background-color: #c0dd8d;">
    <div class="row">
        <div class="col-5 d-flex justify-content-end">
            <div class="col-11 d-flex justify-content-center align-items-center my-5"
                style="background: white; border-radius: 30px 30px 30px 30px;">
                <form action="/register" method="POST">
                    @csrf
                    <div>
                        <div>
                            <h2 class="text-center">REGISTRARSE</h2>
                        </div>
                        @include('layouts.messages')
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="txtNombre">Nombre</span>
                            <input type="text" class="form-control" placeholder="Nombre" aria-label="nickname"
                                aria-describedby="addon-wrapping" name="name">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="txtNombre">Apellido</span>
                            <input type="text" class="form-control" placeholder="Apellido" aria-label="nickname"
                                aria-describedby="addon-wrapping" name="lastname">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="txtNickname">NickName</span>
                            <input type="text" class="form-control" placeholder="@" aria-label="nickname"
                                aria-describedby="addon-wrapping" name="nickname">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="txtCorreo">Correo</span>
                            <input type="text" class="form-control" placeholder="Correo" aria-label="nickname"
                                aria-describedby="addon-wrapping" name="email">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap  ">
                            <span class="input-group-text" id="txtPassword">Contraseña</span>
                            <input type="password" class="form-control" placeholder="Contraseña" aria-label="password"
                                aria-describedby="addon-wrapping" name="password">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="txtCpassword">Confirmar Contraseña</span>
                            <input type="password" class="form-control" placeholder="Confirmar Contraseña"
                                aria-label="nickname" aria-describedby="addon-wrapping" name="password_confirmation">
                        </div>
                        <br>
                        <div class="row">
                            <input type="submit" class="btn btn-success" value="Registrarse">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="col-7 d-flex justify-content-center">
            <img src="../image/logoG.png" alt="" style="width: 600px;">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>
