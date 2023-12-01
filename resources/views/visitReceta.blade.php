<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>detalle de Receta</title>
</head>

<body class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex align-items-center">
            <div class="col-4">
                <img src="../image/logo.png" alt="Logo" width="300" height="100">
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h5>Calificación</h5>
                        <div class="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label for="star3"></label>
                            <input type="radio" id="star2" name="rating" value="2" />
                            <label for="star2"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label for="star1"></label>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="col-9 right scrollable-right content-s">
        <div class="container-so">
            <div class="container">
                <div class="row">
                    <h1 class="text-center">NOMBRE RECETA</h1>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <h4>Descripción:</h4>
                    </div>
                    <div class="col-8">
                        <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia deserunt iste esse libero, minus veniam asperiores officia itaque sit quod, a, error vel laudantium quis qui ipsa facilis voluptatem. Ipsa?</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <h4>Ingredientes:</h4>
                    </div>
                    <div class="col-8">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Ingredientes</th>
                                    <th>Unidad</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Comida</td>
                                    <td>2x Ingrediente</td>
                                    <td>2</td>
                                </tr>
                                <tr>
                                    <td>Comida</td>
                                    <td>3x Ingrediente</td>
                                    <td>3</td>
                                </tr>
                                <tr>
                                    <td>Comida</td>
                                    <td>4x Ingrediente</td>
                                    <td>4</td>
                                </tr>
                                <tr>
                                    <td>Comida</td>
                                    <td>5x Ingrediente</td>
                                    <td>5</td>
                                </tr>
                                <tr>
                                    <td>Comida</td>
                                    <td>1x Ingrediente</td>
                                    <td>1</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-4">
                                <button type="button" class="btn btn-outline-primary">Añadir campo</button>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <h4>Procedimiento:</h4>
                    </div>
                    <div class="col-8">
                        <label for="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit quas voluptas molestias enim amet ea dolor laborum modi corporis corrupti eligendi est magnam quos, libero adipisci, accusantium sit. Praesentium, odio! Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis reiciendis iste recusandae, ipsam sed mollitia numquam ab magnam, aspernatur iure non corrupti odit ex perspiciatis sequi quae! Eius, laudantium vero?</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <h4>Foto:</h4>
                    </div>
                    <div class="col-8">
                        <img src="./image/comida.webp" alt="" class="img_view_receta">
                        <button type="button" class="btn btn-outline-primary">Subir foto</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </form>

    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
<style>
.rating {
  display: inline-block;
}

.rating input {
  display: none;
}

.rating label {
  cursor: pointer;
  width: 30px;
  height: 30px;
  margin: 0 2px;
  background-color: #ccc;
  border-radius: 50%;
  display: inline-block;
}

.rating label:before {
  content: '\2605'; /* Unicode character for a star */
  font-size: 20px;
  color: #fff;
  display: block;
  text-align: center;
  line-height: 30px;
}

.rating input:checked ~ label {
  background-color: #f8d64e; /* Color for selected stars */
}
</style>