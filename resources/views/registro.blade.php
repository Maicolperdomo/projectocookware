<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <script src="./assets/Js/bootstrap.js"></script>
    <script src="./assets/Js/axios.min.js"></script>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="./assets/css/bootstrap.css">
    </head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<body style=" background-color: rgb(185, 232, 115)">
<div class="pagina container-fluid" style="display: flex; justify-content: center; margin-top: 70px;">
<div class=" row carta" style="background-color: white; border-radius: 50px; width: 80%;">

 <h1 class="text-center">REGISTRARSE</h1>
 
 <form>
 <div class="input-group mb-3">
  <span class="input-group-text" id="txtNombre">Nombre</span>
  <input type="text" class="form-control" placeholder="" aria-label="txtNombre" aria-describedby="basic-addon1">
</div>
<br>

<div class="input-group mb-3">
  <span class="input-group-text" id="txtApellido">Apellido</span>
  <input type="text" class="form-control" placeholder="" aria-label="txtApellido" aria-describedby="basic-addon1">
</div>
<br>

<div class="input-group mb-3">
  <span class="input-group-text" id="nickname">NickName</span>
  <input type="text" class="form-control" placeholder="@" aria-label="nickname" aria-describedby="basic-addon1">
</div>
<br>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Email" aria-label="txtEmail" aria-describedby="basic-addon2">
  <span class="input-group-text" id="txtEmail">@example.com</span>
</div>
<br>
<div class="input-group mb-3 ">
  <span class="input-group-text" id="txtContrasena">Contraseña</span>
  <input type="text" class="form-control" placeholder="" aria-label="txtContrasena" aria-describedby="basic-addon1">
</div>
<br>
<div class="input-group mb-3">
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="txtconfpassword">Confirmar Contraseña</span>
  <input type="text" class="form-control" placeholder="" aria-label="txtconfpassword" aria-describedby="addon-wrapping">
</div>
<br>
    <div class="botonRegistrarse "  >
<button style="margin-top: 30px; border: none; border-radius: 50px 50px 50px 50px;
    align-items: center; background-color: green; width: 150px; height: 50px; ">Registrarse</button>
</div>  
</form>
   </div>
   </div>
</body>

</html>
<script src="../js/registro.js"></script>