<!doctype html>
<html lang="en">

<head>
    <title>INICIO DE SESIÓN</title>
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
        <div class="col-7 d-flex justify-content-center">
            <img src="../image/logoG.png" alt="" style="width: 600px;">
        </div>
        <div class="col-5 d-flex justify-content-center">
            <div class="col-10 d-flex justify-content-center my-5"
                style="background: white; border-radius: 30px 30px 30px 30px;">
                <div>
                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div>
                            <h2 class="text-center  mt-5 mb-5">Inicio de sesion</h2>
                        </div>
                        <div class="input-group flex-nowrap">
                            <span class="input-group-text" id="nickname">NickName</span>
                            <input type="text" class="form-control" placeholder="@" aria-label="nickname"
                                aria-describedby="addon-wrapping" name="nickname">
                        </div>
                        <br>
                        <div class="input-group flex-nowrap  ">
                            <span class="input-group-text" id="password">Contraseña</span>
                            <input type="password" class="form-control" placeholder="" aria-label="password"
                                aria-describedby="addon-wrapping" name="password">
                        </div>
                        <div class="row mt-3">
                            <a class="btn btn-success" href="vistaPrincipal">Iniciar sesion</a>
                        </div>
                        <div class="text-center mt-3">
                            <button type="button" class="btn btn-primary ">Continuar con Google</button>
                        </div>
                        <div class="row mt-3">
                            <a href="{{route('register')}}" class="btn btn-danger">Registrarse</a>
                        </div>
                        <div class="row mt-3">
                            <a href="cambio"> ¿OLVIDO SU CONTRASEÑA? </a>
                        </div>
                    </form>
                </div>
            </div>
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