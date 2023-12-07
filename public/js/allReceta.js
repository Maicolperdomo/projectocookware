function mostrar() {
    axios.get("/visper")
        .then(res => {
            let receta = res.data;

            let rec = `<div class="card mx-3 my-3 d-flex align-items-center" style="width: 18rem;">`;
            if (receta.foto) {
                try {
                    rec += `<a href="#"><img src="${receta.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;"></a>`;
                } catch (error) {
                    console.error("Error al parsear las rutas de las imágenes:", error);
                    rec += `Error al cargar imágenes`;
                }
            }
            rec += `<div class="card-body">
                        <h5 class="card-title">${receta.nombre}</h5>
                        <p class="card-text">${receta.nivel}</p>
                    </div>`;
            rec += `</div>`;

            document.getElementById("tablaReceta").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        });
}

mostrar();