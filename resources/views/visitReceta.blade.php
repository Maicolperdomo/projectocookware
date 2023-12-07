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

    <body class="container-fluid">
        <div class="row" style="background-color: #f6f9fa">
            <div class="col-12 d-flex justify-content-center">
                <a href="/home"><img src="../image/logo.png" alt="Logo" width="300" height="100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-4 d-flex justify-content-center" style="background-color: #76cc68">
                <div class="mt-3  fw-bolder">
                    <div class="d-flex justify-content-around"><img src="{{ $info->foto }}" alt="Foto Receta"
                            width="300" height="300"></div>
                    <div class="d-flex justify-content-center my-2">
                        <h2 class="card-title fw-bolder">{{ $info->nombre }}</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">{{ $info->descripcion }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-8" style="background-color: #f6f9fa">
                <div class="d-flex justify-content-center my-2">
                    <h4 class="d-flex justify-content-center">Ingredientes</h4>
                </div>
                <div>
                    @php
                        $ingredientesArray = json_decode($info->ingredientes, true);
                    @endphp
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Unidad</th>
                                <th scope="col">Cantidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingredientesArray as $ingrediente)
                                <tr>
                                    <td>{{ $ingrediente['nombre'] }}</td>
                                    <td>{{ $ingrediente['unidad'] }}</td>
                                    <td>{{ $ingrediente['cantidad'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center my-2">
                    <h5 class="d-flex justify-content-center">Pasos</h4>
                </div>
                <p>{{ $info->pasos }}</p>
                <div class="row">
                    <div class="col-6">
                        <h5 class="d-flex justify-content-center">Nivel de Dificultad</h4>
                            <p class="d-flex justify-content-center">{{ $info->nivel_id }}</p>
                    </div>
                    <div class="col-6">
                        <h5 class="d-flex justify-content-center">Tiempo estimado</h4>
                            <p class="d-flex justify-content-center">{{ $info->tiempo_estimado }}</p>
                    </div>
                </div>

            </div>
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
