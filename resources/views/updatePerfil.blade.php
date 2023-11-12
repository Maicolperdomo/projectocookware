<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Perfil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body class="container-fluid" style="background-color: #c0dd8d;">
    <div class="row">
        <div class="col-10 d-flex justify-content-end">
            <div class="col-10 d-flex justify-content-center align-items-center my-5"
                style="background: white; border-radius: 30px 30px 30px 30px;">
                    <div>
                        <div>
                            <h2 class="text-center">Editar Perfil</h2>
                            <form>
                                <div class="mb-3">
                                  <label for="txtNombre" class="form-label">Nombre</label>
                                  <input type="text" class="form-control" value=" {{ auth()->user()->name }}" id="txtNombre" >
                                </div>
                                <div class="mb-3">
                                  <label for="txtApellido" class="form-label">Apellido</label>
                                  <input type="text" class="form-control"  value=" {{ auth()->user()->lastname }}" id="txtApellido">
                                </div>
                                <div class="mb-3">
                                    <label for="txtNickname" class="form-label">Nickname</label>
                                    <input type="text" class="form-control"value="@ {{ auth()->user()->nickname }}" id="txtNickname">
                                  </div>
                                  <div class="mb-3">
                                    <label for="txtCorreo" class="form-label">Correo</label>
                                    <input type="text" class="form-control"  value=" {{ auth()->user()->email }}" id="txtCorreo">
                                  </div>

                                  <a class="btn btn-success" href="/home">Actualizar Perfil</a>
                              </form>
                        </div>
            </div>
        </div>
   </div>
  
   <div class="row col-6  justify-content-center">
        @csrf
        <div class="card text-dark">
            <div class="card-body col-8">
                @if ($errors->Any() && session('pass'))
                    <div class="alert alert-danger m-3">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('status-password'))
                    <div class="alert alert-success m-3">
                        {{ session('status-password') }}
                    </div>
                @endif

                <div class="form-group">
                    <label>Contraseña actual</label>
                    <input type="password" class="form-control" name="password_vieja">
                </div>
                <div class="form-group">
                    <label>Nueva contraseña</label>
                    <input type="password" class="form-control" name="password">
                </div>
                <div class="form-group">
                    <label>Confirmar contraseña</label>
                    <input type="password" class="form-control" name="password_confirmation">
                </div>

            </div>
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </div>
        </div>
    </form>

</div>

</div>


</body>

</html>