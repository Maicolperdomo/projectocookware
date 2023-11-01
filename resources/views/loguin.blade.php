<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESION</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./assets/Js/bootstrap.js"></script>
    <script src="./assets/Js/axios.min.js"></script>
    <link rel="stylesheet" href="styles.css">

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style="background-color: rgb(188, 237, 116)" class="container-fluid">

    <div class="row" style="border-radius: 35px;  ">
        <div class="col-6 d-flex flex-wrap justify-content-lg-center align-content-center">
            <img src="../image/logoG.png" alt="">
        </div>
        <div class="col-3 d-flex justify-content-center mt-5" style="background: white;">
            <div>
                <h2 class="text-center  mt-5 mb-5">Inicio de sesion</h2>
                <div class="row">
                    <label class="form-label" for="">NickName</label>
                    <input class="form-control" type="nickname" name="txtnickname" id="txtnickname">
                </div>

                <div class="row">
                    <label class="form-label" for="">Password</label>
                    <input class="form-control" type="password" name="txtPassword" id="txtPassword">
                </div>

                <div class="row mt-3">
                    <button type="button" class="btn btn-primary">iniciar sesion</button>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-primary ">Continuar con Google</button>
                </div>
                <div class="row mt-3">
                    <button type="button" class="btn btn-danger">Registrarse</button>
                </div>
                <div class="row mt-3">
                    <a href="#"> ¿OLVIDO SU CONTRASEÑA? </a>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>