<!DOCTYPE html>
<html lang="en">
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
                                  <input type="email" class="form-control" id="txtNombre" aria-describedby="emailHelp">
                                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                  <label for="txtApellido" class="form-label">Apellido</label>
                                  <input type="password" class="form-control" id="txtApellido">
                                </div>
                                <div class="mb-3">
                                    <label for="txtNickname" class="form-label">Nickname</label>
                                    <input type="password" class="form-control" id="txtNickname">
                                  </div>
                                  <div class="mb-3">
                                    <label for="txtCorreo" class="form-label">Correo</label>
                                    <input type="password" class="form-control" id="txtCorreo">
                                  </div>
                                  <div class="mb-3">
                                    <label for="txtApellido" class="form-label">Apellido</label>
                                    <input type="password" class="form-control" id="txtApellido">
                                  </div>
                                <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
                              </form>
                        </div>
            </div>
        </div>
   </div>

</body>

</html>