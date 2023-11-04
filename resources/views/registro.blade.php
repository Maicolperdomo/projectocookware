<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REGISTRO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="../js/axios.min.js"></script>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body class="container-fluid" style="background-color: #c0dd8d;">
  <div class="row my-3">
    <div class="col-5 d-flex justify-content-end">
      <div class="col-11 d-flex justify-content-center" style="background: white; border-radius: 30px 30px 30px 30px;">
        <div class="my-5">
          <div>
            <h2 class="text-center my-3">REGISTRARSE</h2>
          </div>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="txtNombre">Nombre</span>
            <input type="text" class="form-control" placeholder="Nombre" aria-label="nickname" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="txtApellido">Apellido</span>
            <input type="text" class="form-control" placeholder="Apellido" aria-label="nickname" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="txtNickname">NickName</span>
            <input type="text" class="form-control" placeholder="@" aria-label="nickname" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="txtCorreo">Correo</span>
            <input type="text" class="form-control" placeholder="Correo" aria-label="nickname" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="input-group flex-nowrap  ">
            <span class="input-group-text" id="txtPassword">Contraseña</span>
            <input type="password" class="form-control" placeholder="Contraseña" aria-label="password" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="input-group flex-nowrap">
            <span class="input-group-text" id="txtCpassword">Confirmar Contraseña</span>
            <input type="text" class="form-control" placeholder="Confirmar Contraseña" aria-label="nickname" aria-describedby="addon-wrapping">
          </div>
          <br>
          <div class="row mt-3">
            <a class="btn btn-success" href="" onclick="registrarUsuario()">Registrarse</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-7 d-flex justify-content-center">
      <img src="../image/logoG.png" alt="" style="width: 600px;">
    </div>
  </div>
</body>

</html>
<script src="../js/registro.js"></script>