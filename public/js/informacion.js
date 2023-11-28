function informacionReceta() {
    axios.get("receta")
    .then(res => {
        console.log(res)
        rec = "";
        res.data.forEach((element, index) => {
            rec += `
             <div>
            <div class="row d-flex justify-content-around col-12 bg-white " style="border-radius: 30px">
                <div class="col-md-2 col-2  ">
                    <img src="../image/R.jpeg" width="200" height="200" alt="...">
                </div>
                <div class="col-md-6 p-4 ">
                    <h5 class="mt-0"></h5>
                    <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                    <a href="visrec" class="card-link">Visitar Receta</a>
                </div>
            </div>
        </div>`
        });
        document.getElementById("tablaReceta").innerHTML = rec;
    })
    .catch(error => {
        console.error("Error al obtener la información de nombre y descripción:", error);
    });
    document.getElementById("tablaReceta").innerHTML = rec;
}
informacionReceta();