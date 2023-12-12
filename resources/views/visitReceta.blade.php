<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <style>
        @font-face {
            font-family: crema;
            src: url(font/CourierPrime-Regular.ttf);
        }
    </style>
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
                <div class="mt-3">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <div class="col-4 d-flex justify-content-end">
                                <img src="{{ $info->user->foto }}" alt="Foto perfil" width="100" height="100"
                                    style="border-radius: 50%">
                            </div>
                            <div class="col-8 mx-2">
                                <div>
                                    <h3 class="fw-bolder">{{ $info->user->name }} {{ $info->user->lastname }}</h3>
                                    <h4 class="fw-bolder">{{ '@' . $info->user->nickname }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-around"><img src="{{ $info->foto }}" alt="Foto Receta"
                            width="300" height="300"></div>
                    <div class="d-flex justify-content-center my-2">
                        <h2 class="card-title fw-bolder">{{ $info->nombre }}</h2>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title" style="width: 75%; text-align: justify">{{ $info->descripcion }}</h5>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn btn fw-bolder" style="background-color: #eb4e3d"
                            data-user-id="{{ $info->user_id }}" onclick="mostrarPerfil(event)">Visitar Perfil</a>
                    </div>
                    <br>
                </div>
            </div>
            <div class="col-8" style="background-color: #f6f9fa">
                <div class="d-flex justify-content-center my-2">
                    <h4 class="d-flex justify-content-center fw-bolder">Ingredientes</h4>
                </div>
                <div class="d-flex justify-content-center">
                    @php
                        $ingredientesArray = json_decode($info->ingredientes, true);
                    @endphp
                    <table class="table" style="width: 50%">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Unidad</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ingredientesArray as $ingrediente)
                                <tr>
                                    <td>{{ $ingrediente['nombre'] }}</td>
                                    <td>{{ $ingrediente['cantidad'] }}</td>
                                    <td>{{ App\Models\Unidad::find($ingrediente['unidad'])->nombre ?? 'N/A' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center my-2">
                    <h4 class="d-flex justify-content-center fw-bolder">Pasos</h4>
                </div>
                <div class="d-flex justify-content-center">
                    @php
                        $pasosArray = json_decode($info->pasos, true);
                    @endphp
                    <table class="table" style="width: 80%">
                        <thead>
                            <tr>
                                <th scope="col">Pasos a seguir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasosArray as $paso)
                                <tr>
                                    <td>{{ $paso['paso'] }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <div class="col-6">
                        <h5 class="d-flex justify-content-center fw-bolder">Nivel de Dificultad</h4>
                            <p class="d-flex justify-content-center">
                                {{ App\Models\Niveles::find($info['nivel_id'])->nivel ?? 'N/A' }}</p>
                    </div>
                    <div class="col-6">
                        <h5 class="d-flex justify-content-center fw-bolder">Tiempo estimado</h4>
                            <p class="d-flex justify-content-center">{{ $info->tiempo_estimado }}</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function mostrarPerfil(event) {
                event.preventDefault();

                // Obtén el user_id del atributo data
                const userId = event.target.dataset.userId;

                // Realiza una redirección a la página de perfil
                window.location.href = `/perfil/${userId}`;
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
    </body>

@endauth

@guest
    <p>Para ver el contenido <a href="/login">Inicia Sesion</a></p>
@endguest

</html>
