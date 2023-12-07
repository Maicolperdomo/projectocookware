<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

@auth

    <body class="container-fluid" style="background-color: #76cc68">
        <div class="row" style="background-color: #f6f9fa">
            <div class="col-12 d-flex justify-content-center">
                   <a href="/home"><img src="../image/logo.png" alt="Logo" width="300" height="100"></a> 
            </div>
        </div>
        
        <div>@php
            $ingredientesArray = json_decode($info->ingredientes, true);
        @endphp
        
        @foreach ($ingredientesArray as $ingrediente)
            <p>Nombre: {{ $ingrediente['nombre'] }}</p>
            <p>if (is_array($ingredientesArray) && isset($ingredientesArray['unidad']['nombre'])) {
                echo $ingredientesArray['unidad']['nombre'];
            } else {
                echo "No se pudo acceder a la unidad";
            }
            </p>
            <p>Cantidad: {{ $ingrediente['cantidad'] }}</p>
            <!-- Agrega más detalles según sea necesario -->
        @endforeach</div>
        <input value="{{ $info->nombre }}">


        <div id="tablaReceta">
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
