<!doctype html>
<html lang="en">

<head>
    <title>Restablecer Contrasena</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body style="background-color: #52ba66;">
    <div class="container">
        <section class="section register d-flex flex-column align-items-center justify-content-center py-2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class=" col-lg-4 col-md-6 d-flex flex-column align-items-center w-auto">
                        <img src="../image/logoG.png" alt="">
                    </div>
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="pt-2 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">CAMBIAR CONTRASEÑA</h5>
                            </div>
                            <form method="POST" action="/reset-password">
                              @csrf
                              <input type="hidden" name="token" value="{{ $token }}">
                              <input type="hidden" name="email" value="{{ $email }}">
                                <div class="col-12">
                                    <label for="password" class="form-label">Nueva Contraseña</label>
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label"> Confirmar Contraseña</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                </div>
                                <div class="col-12">
                                    <input type="submit" class="btn" value="Restablecer Contraseña">
                                </div>
                                <br>
                                <div class="col-12">
                                    <p class="small mb-0">¿NO TIENES UNA CUENTA? <a href="/register"> crear una
                                            cuenta</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
    </script>
</body>

</html>
