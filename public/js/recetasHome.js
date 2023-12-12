function recargarPagina() {
    location.reload();
}

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

            document.getElementById("searchResults").innerHTML = rece;
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

// searchScript.js

document.addEventListener('DOMContentLoaded', function () {
    const searchForm = document.getElementById('searchForm');
    const searchInput = document.getElementById('search');
    const searchResults = document.getElementById('searchResults');

    searchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const selectedRecipe = searchInput.value;

        if (selectedRecipe) {
            alert('Realizar búsqueda o redirigir a la página de detalles para: ' + selectedRecipe);
        }
    });

    searchInput.addEventListener('input', function () {
        const term = this.value;
        const autocompleteUrl = searchForm.dataset.route;

        axios.get(autocompleteUrl, { params: { term: term } })
        .then(function (res) {
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

            document.getElementById("searchResults").innerHTML = rece;
        })
        .catch(err => {
            console.error(err);
        });
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const nivelSelect = document.getElementById('txtNivel');
    const searchResults = document.getElementById('searchResults');

    // Obtener niveles por axios y cargar en el select
    cargarNiveles();

    // Evento al cambiar el nivel
    nivelSelect.addEventListener('change', function () {
        const selectedNivel = nivelSelect.value;
        if (selectedNivel) {
            obtenerRecetasPorNivel(selectedNivel);
        }
    });

    // Función para cargar los niveles por axios
    function cargarNiveles() {
        axios.get("/nivel")
            .then(res => {
                console.log(res)
                const niveles = res.data;

                nivelSelect.innerHTML = `<option selected disabled>Filtrar</option>`;

                niveles.forEach(niv => {
                    const option = document.createElement('option');
                    option.value = niv.id;
                    option.text = niv.nivel;
                    nivelSelect.appendChild(option);
                });
            })
            .catch(err => {
                console.error(err);
            });
    }

    // Función para obtener recetas por nivel
    function obtenerRecetasPorNivel(nivelId) {
        axios.get(`/recetas/por-nivel/${nivelId}`)
            .then(function (res) {
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

            document.getElementById("searchResults").innerHTML = rece;
        })
        .catch(err => {
            console.error(err);
        });
    }
});

