document.addEventListener('DOMContentLoaded', function() {
    // La página se ha cargado completamente, ahora puedes acceder al elemento
    var userId = document.getElementById('iduser').value;
    console.log(userId);
    mostrar(userId)
});

function mostrar(userId) {
    axios.get(`/recetausuario/${userId}`)
        .then(res => {
            console.log(res);
            let rec = "";

            res.data.forEach((element, index) => {
                rec += `<div class="card mx-2 my-3 d-flex align-items-center" style="width: 220px; height: 290px">`;
                console.log(element.foto)
                if (element.foto) {
                    try {

                        if (element.foto) {
                            rec += `<a href="${element.id}"><img src="${element.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;"></a>`;
                        } 
                    } catch (error) {
                        console.error(
                            "Error al parsear las rutas de las imágenes:",
                            error
                        );
                        rec += `Error al cargar imágenes`;
                    }
                }
                rec += `<div class="card-body">
                            <h5 class="card-title">${element.nombre}</h5>
                            <p class="card-text">Dificultad: ${element.nivel}</p>
                        </div>`
                rec += `</div>`;
            });

            document.getElementById("searchResults").innerHTML = rec;
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


