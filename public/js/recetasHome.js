function mostrar() {
    axios.get("/recetas")
        .then(res => {
            console.log(res);
            let rece = "";

            res.data.forEach((element, index) => {
                rece += `<div class="card mx-2 my-3 d-flex align-items-center" style="width: 220px; height: 290px">`;
                if (element.foto) {
                    try {

                        if (element.foto) {
                            rece += `<a href="visper/${element.id}"><img src="${element.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;"></a>`;
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
                            <p class="card-text" id="nivell">Dificultad: ${element.nivel}</p>
                        </div>`
                rece += `</div>`;
            });

            document.getElementById("tablaReceta").innerHTML = rece;
        })
        .catch(err => {
            console.error(err);
        });

        axios.get("/nivel")
        .then(res => {
            console.log(res)
            const select = document.getElementById('txtNivel');
            const niveles = res.data;

            select.innerHTML = `<option selected disabled>Filtrar</option>`;

            niveles.forEach(niv => {
                const option = document.createElement('option');
                option.value = niv.id;
                option.text = niv.nivel;
                select.appendChild(option);
            })
        })
        .catch(err => {
            console.error(err);
        })
}

mostrar();