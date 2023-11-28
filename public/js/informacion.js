
function informacionReceta() {
    axios.get("/receta")
        .then(res => {
            console.log(res)
            rece = "";
            res.data.forEach((element) => {
                rece +=`
                    <div>
                        <div class="row d-flex justify-content-around col-12 bg-white " style="border-radius: 30px">
                            <div class="col-md-2 col-2  ">
                                <img src="../image/R.jpeg" width="200" height="200" alt="...">
                            </div>
                            <div class="col-md-6 p-4 ">
                            <h5 class="mt-0">${element.nombre}</h5>
                                <p>${element.descripcion}</p>
                                <a href="visrec" class="card-link">Visitar Receta</a>
                            </div>

                        </div>
                    </div>`
            });
            document.getElementById("tablaReceta").innerHTML = rece;
        })
        .catch(err => {
            console.error(err);
        })
}

informacionReceta();