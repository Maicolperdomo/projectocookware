<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookware </title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="../Js/axios.min.js"></script>
    <style type="text/css" id="operaUserStyle"></style>
</head>
<body class="container-fluid">
    <div class="row">
    <div class="col-3" style="height: 606px;">
                <img src="../image/logo.png" alt="Logo" width="300" height="100">
                <div class="d-flex justify-content-center">
                    <img src="../image/61205.png" alt="..." style="width: 200px">
                </div>
                <div class="my-3">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">@ santi_san</h5>
                    </div>
                    <ul class="text-left">
                        <li class="list-group-item">Recetas: </li>
                        <li class="list-group-item">Seguidores: </li>
                        <li class="list-group-item">Calificacion: </li>
                    </ul>
          
                    </div>
                </div>
            </div>
    </div>
    <div class="col-9 right my-3" style="background-color: #dc3545">
    <div class="container">
        <div class="form-container">
            <label for="uname">Buscar</label>
            <input type="text" name="uname" required>
            <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>


    <div class="row">
        <div class="col-md-12">
            <h1>Visitar perfil</h1>

            <form action="{{ route('perfil.update') }}" method="POST" onsubmit="return validar()">
                @csrf

                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="boton-visitar-perfil">Visitar perfil</button>
                </div>
            </form>
            </div>
    </div>
</body>

</html>
>>>>>>> 3ffb2fd4b8296bc22c0cbe66497ac2b5a6e5fe07


                <div class="row d-flex justify-content-around mt-4" style="background-color: #dc3545"> 
                    <div class="card" style="width: 18rem;">
                        <div class="d-flex justify-content-center">
                        <img src="../image/61205.png" alt="..." width="200" height="200">
                    </div>
                        <div class="card-body">
                            <h5 class="card-title">NOMBRE RECETA</h5>
                            <p class="card-text">DESCRIPCION</p>
                        </div>
                        <div class="card-body">
                            <a href="visitPerfil" class="card-link">Visitar Perfil</a>
                            <a href="visitarReceta" class="card-link">Visitar Receta</a>
                   </div>
            </div>
    </div>
 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"> </script>
</body>
</html>