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

<body style="background-color: rgb(188, 237, 116); border-radius: 50px 50px 50px 50px; " class="container-fluid">

    <div class="row" style="border-radius: 50px 50px 50px 50px; padding: 40px; text-align: center; margin-bottom: 80px;  ">
        <!-- 1 -->
        <div class="col-7 d-flex flex-wrap justify-content-lg-center align-content-center">
            <img src="../image/logoG.png" alt="">
        </div>

        <!-- 2 -->
        <div class="col-4 d-flex justify-content-center mt-5 " style="background: white;border-radius: 30px 30px 30px 30px;">
            <div>
                <h2 class="text-center  mt-5 mb-5">Inicio de sesion</h2>
                <div class="input-group flex-nowrap">
                    <span class="input-group-text" id="nickname">NickName</span>
                    <input type="text" class="form-control" placeholder="@" aria-label="nickname" aria-describedby="addon-wrapping">
                </div>
                <br>
                <div class="input-group flex-nowrap ">
                    <span class="input-group-text" id="password">Contraseña</span>
                    <input type="text" class="form-control" placeholder="" aria-label="password" aria-describedby="addon-wrapping">
                </div>

                <div class="row mt-3">
                    <a href="home" style="text-decoration: none; color: white; 
                padding: 10px 20px; background-color: green; border-radius: 5px;">Iniciar Sesion</a>
                </div>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-primary ">Continuar con Google</button>
                </div>
                <div class="row mt-3">
                    <a href="registro" style="text-decoration: none; color: white; 
                padding: 10px 5px; border-radius: 5px;" class="btn btn-danger">Registrarse</a>

                </div>
                <div class="row mt-3">
                    <a href="cambio"> ¿OLVIDO SU CONTRASEÑA? </a>
                </div>
            </div>

        </div>
    </div>
    </div>
</body>

</html>
<script>
    document.getElementById('registro').addEventListener('click', function() {
        window.history.back();
    });
    document.getElementById('home').addEventListener('click', function() {
        window.history.back();
    });
</script>