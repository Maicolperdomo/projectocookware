<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INICIO DE SESION</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body class="container-fluid" style="background-color: #c0dd8d;">
    <div class="row my-3">
        <div class="col-7 d-flex justify-content-center">
            <img src="../image/logoG.png" alt="" style="width: 600px;">
        </div>
        <div class="col-5 d-flex justify-content-center">
            <div class="col-10 d-flex justify-content-center my-5" style="background: white; border-radius: 30px 30px 30px 30px;">
                <div>
                    <div>
                    <h2 class="text-center  mt-5 mb-5">Inicio de sesion</h2>
                    </div>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="nickname">NickName</span>
                        <input type="text" class="form-control" placeholder="@" aria-label="nickname" aria-describedby="addon-wrapping">
                    </div>
                    <br>
                    <div class="input-group flex-nowrap  ">
                        <span class="input-group-text" id="password">Contraseña</span>
                        <input type="password" class="form-control" placeholder="" aria-label="password" aria-describedby="addon-wrapping">
                    </div>
                    <div class="row mt-3">
                        <a class="btn btn-success" href="vistaPrincipal">Iniciar sesion</a>
                    </div>
                    <div class="text-center mt-3">
                        <button type="button" class="btn btn-primary ">Continuar con Google</button>
                    </div>
                    <div class="row mt-3">
                        <a href="registro" style="text-decoration: none; color: white;padding: 10px 5px; border-radius: 5px;" class="btn btn-danger">Registrarse</a>
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
    document.getElementById('vistaPrincipal').addEventListener('click', function() {
        window.history.back();
    });
</script>