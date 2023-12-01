<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css" 
    integrity="sha384-BY+fdrpOd3gfeRvTSMT+VUZmA728cfF9Z2G42xpaRkUGu2i3DyzpTURDo5A6CaLK" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
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
                    </div>
                    <div class="star-rating">
  <input type="radio" id="star0"  class="fa far-star" data-index="0">
  <label for="star0"></label>
  <input type="radio" id="star1" class="fa far-star" data-index="1">
  <label for="star1"></label>
  <input type="radio" id="star2" class="fa far-star" data-index="2">
  <label for="star2"></label>
  <input type="radio" id="star3"  class="fa far-star" data-index="3">
  <label for="star3"></label>
  <input type="radio" id="star4"  class="fa far-star" data-index="4">
  <label for="star4"></label>
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
<script>
    var ratedIndex = -1, uID =0;

    $(document).ready(function(){
        resetStarColors();

        if(localStorage.getItem('ratedIndex') !=null){
         setStars(parseInt(localStorage.getItem('ratedIndex')));
         uID = localStorage.getItem('uID');
    }
$('.fa-star').on('click',function(){
    ratedIndex = parseInt($(this).data('index'));
    localStorage.setItem('ratedIndex', ratedIndex);
    saveToTheDB();
});
$('.fa-star').mousemove(function(){
    resetStarColors();
    var currentIndex = parseInt($(this).data('index'));
    setStars(currentIndex);
});
$('.fa-star').mouseleave(function(){
    resetStarColors();

       if(ratedIndex !=-1)
        setStars(ratedIndex)
});

    });
    function saveToTheDB(){
        $.ajax({
            url: "visitReceta.blade.php",
            method : "POST",
            dataType: 'json',
            data: {
                save: 1,
                uID: uID,
                ratedIndex: ratedIndex
            }, success: function(r){
              uID: r.uid;
              localStorage.setItem('uID', 'uID');
            }
        })
    }
    function setStars(max){
        for (var i=0; i<= max; i++ )
        $('.fa-star:eq('+i+')').css('color', 'green');
    }
    function resetStarColors(){
        $('.fa-star').css('color', 'black');
    }
</script>
<?php

$conn = new mysqli('localhost', 'root', '', 'proyectococina');
    if(isset($_POST['save'])){
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex =$conn-> real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;
   
    if($uID){
        $conn->query(query: "INSERT TO stars (ratedIndex) VALUES('$ratedIndex')");
        $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
    }else
    $conn->query(query:"UPDATE stars SET ratedIndex='$ratedIndex' WHERE id ='$uID'");
    exit(json_encode(array('id'=>$uID)));
}
/**$sql=$conn->query(query:"SELECT id FROM stars");
$numR = $sql->num_rows;

$sql = $conn->query(query:"SELECT SUM(rateIndex) AS total FROM stars");
$rData = $sql->fetch_array();
$total = $rData['total'];

$avg= $otal / $numR;/** */

?>
<style>
body {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100vh;
  margin: 0;
  background-color: #f4f4f4;
}

.star-rating {
  font-size: 0;
}

.star-rating input {
  display: none;
}

.star-rating label {
  display: inline-block;
  cursor: pointer;
  font-size: 2rem;
  color: #ccc;
}

.star-rating label:before {
  content: '\2605'; /* Código de estrella en unicode */
  display: block;
}

.star-rating input:checked ~ label {
  color: #ffd700; /* Color de estrella seleccionada */
}
</style>