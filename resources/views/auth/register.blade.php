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
    <div class="row my-3">
        <div class="col-5 d-flex justify-content-end">
            <div class="col-11 d-flex justify-content-center"
                style="background: white; border-radius: 30px 30px 30px 30px;">
                <form action="{{route('register')}}" method="post" novalidate></form>
                @csrf
                <div class="my-5">
                    <div>
                        <h2 class="text-center my-3">REGISTRARSE</h2>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span  class="input-group-text" id="txtNombre">Nombre</span>
                        <input type="text" class="form-control"  placeholder="Nombre" aria-label="nickname"
                            aria-describedby="addon-wrapping" name="name">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                        <span  class="input-group-text" id="txtApellido">Apellido</span>
                        <input type="text" class="form-control"  placeholder="Apellido" aria-label="nickname"
                            aria-describedby="addon-wrapping" name="lastname">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="txtNickname">NickName</span>
                        <input type="text" class="form-control" placeholder="@" aria-label="nickname"
                            aria-describedby="addon-wrapping" name="nic">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="txtCorreo">Correo</span>
                        <input type="email" class="form-control" placeholder="Correo" aria-label="nickname"
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
                        <input type="text" class="form-control" placeholder="Confirmar Contraseña"
                            aria-label="nickname" aria-describedby="addon-wrapping" name="password_confirmar">
                    </div>
                    <br>
                    <div class="row mt-3">
                        <a class="btn btn-success" href="" type="submit">Registrarse</a>
                    </div>
                </div>
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

