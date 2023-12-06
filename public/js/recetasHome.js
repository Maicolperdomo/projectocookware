function mostrar() {
    axios.get("/recetas")
        .then(res => {
            console.log(res);
            let rece = "";

            res.data.forEach((element, index) => {
                rece += `<div class="card mx-3 my-3 d-flex align-items-center" style="width: 18rem;">`;
                console.log(element.foto)
                if (element.foto) {
                    try {

                        if (element.foto) {
                            rece += `<img src="${element.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;">`;
                        } 
                    } catch (error) {
                        console.error(
                            "Error al parsear las rutas de las imágenes:",
                            error
                        );
                        rece += `Error al cargar imágenes`;
                    }
                }
                rece += `<div class="card-body">
                            <h5 class="card-title">${element.nombre}</h5>
                            <p class="card-text">${element.descripcion}</p>
                            <a href="#" class="btn btn-primary">Ver Receta</a>
                        </div>`
                rece += `</div>`;
            });

            document.getElementById("tablaReceta").innerHTML = rece;
        })
        .catch(err => {
            console.error(err);
        });

}

mostrar();