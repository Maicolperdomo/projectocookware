<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio de contraseña</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="./assets/Js/bootstrap.js"></script>
    <script src="./assets/Js/axios.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>

<body style="background-color: rgb(188, 237, 116);">
    <div class="col-6 d-flex rounded float-end">
        <img src="../image/logoG.png" alt="">
    </div>
    <div class="container" style="justify-content: center;">
        <div class="row col-6 d-flex align-items-center  " style=" background-color: white; 
        border-radius: 30px 30px 30px 30px;  ">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center mt-5">CAMBIAR DE CONTRASEÑA</h2>
                <form>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="correo" class="form-control" id="txtcorreo" name="txtcorreo" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Enviar código</button>
                    </div>
                    <div class="mb-3">
                        <h4>Digite El Codigo</h4>
                        <label for="codigo" class="form-label">Codigo:</label>
                        <input type="codigo" class="form-control" id="codigo" name="codigo" required>
                    </div>
                    <button type="submit" class="btn btn-success">Aceptar</button>
                    <h4>Digite Su Nueva Contraseña</h4>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirmar Contraseña </label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-success">Cambiar Contraseña</button>
                    </div>

</body>

</html>