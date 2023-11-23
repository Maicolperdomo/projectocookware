<!DOCTYPE html>
    <html lang="es">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKWARE/Home</title>
    <link rel="shortcut icon" href="../image/logosmall.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="../Js/axios.min.js"></script>
    <style type="text/css" id="operaUserStyle"></style>

</head>
  
<body class="container-fluid">

                    <form class="d-flex justify-content-end" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                            style="width: 25%;">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
        <div class="row">
            <div class="col-3" style="height: 606px;">
                <img src="../image/logo.png" alt="Logo" width="300" height="100">
                <div class="d-flex justify-content-center">
                    <img src="../image/61205.png" alt="..." style="width: 200px">
                </div>
                <div class="my-3">
                    <div class="d-flex justify-content-center">
                        <h5 class="card-title">@ {{ auth()->user()->nickname }}</h5>
                    </div>
                    <ul class="text-left">
                        <li class="list-group-item">Recetas: </li>
                        <li class="list-group-item">Seguidores: </li>
                        <li class="list-group-item">Calificacion: </li>
                    </ul>
                    <div class="d-flex align-items-end justify-content-center" style="height: 140px">
                        <div class="btn-group dropup" role="group">
                        </div>
                    </div>
                </div>
            </div> 
            <div class="col-9 right my-3" style="background-color: white">
                <div class="row d-flex justify-content-around mt-4" style="background-color: #dc3545">
                <div class="feed-tip-ficha-horizontal">
                   <!-- <div class="card" style="width: 18rem;">
                       <div class="d-flex justify-content-center">
                            <img src="../image/61205.png" alt="..." width="90" height="100">
                              </div>-->
                            <div class="my-3">
                            <div class="my-3">
                   <!-- <div class="d-flex justify-content-center">
                        <h5 class="card-title">@ {{ auth()->user()->nickname }}</h5>
                    </div>-->
                          
                         <!-- <li class="list-group-item">Calificacion: </li>-->
                      
            
       </div>
     </div>
  </div> 
  <div class="container">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Receta 1</h5>
                <img src="../image/61205.png" alt="..." width="90" height="100">
                <p class="card-text">Descripción de la receta 1.</p>
               <!-- <a href="#" class="btn btn-primary">Visitar perfil</a>-->
              <!-- <img src="../image/logoG.png" alt="...">-->
                <a href="#" class="btn btn-primary">Visitar receta</a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Receta 2</h5>
                <img src="../image/61205.png" alt="..." width="90" height="100">
                <p class="card-text">Descripción de la receta 2.</p>
               <!-- <a href="#" class="btn btn-primary">Visitar perfil</a>-->
                <a href="#" class="btn btn-primary">Visitar receta</a>
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Receta 3</h5>
                <img src="../image/61205.png" alt="..." width="90" height="100">
                <p class="card-text">Descripción de la receta 3.</p>
               <!-- <a href="#" class="btn btn-primary">Visitar perfil</a>-->
                <a href="#" class="btn btn-primary">Visitar receta</a>
            </div>
        </div>
    </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>
</body>
</html>