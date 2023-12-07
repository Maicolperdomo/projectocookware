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
        // Lógica de búsqueda o redirección al seleccionar un resultado del autocompletado
        const selectedRecipe = searchInput.value;

        if (selectedRecipe) {
            // Realizar la búsqueda o redirigir a la página de detalles de la receta
            // Puedes usar la variable 'selectedRecipe' para la búsqueda o redirección
            alert('Realizar búsqueda o redirigir a la página de detalles para: ' + selectedRecipe);
        }
    });

    // Autocompletado en tiempo real utilizando Axios
    searchInput.addEventListener('input', function () {
        const term = this.value;
        const autocompleteUrl = searchForm.dataset.route;  // Obtener la URL de la ruta desde el atributo data-route

        axios.get(autocompleteUrl, { params: { term: term } })
            .then(function (response) {
                const data = response.data;

                // Limpiar resultados anteriores
                searchResults.innerHTML = '';

                // Crear y agregar nuevas cartas con los resultados
                data.forEach(function (element) {
                    const card = document.createElement('div');
                    card.className = 'card mx-2 my-3 d-flex align-items-center';
                    card.style = 'width: 220px; height: 290px;';

                    // Imagen de la receta
                    if (element.foto) {
                        try {
                            const image = document.createElement('img');
                            image.src = element.foto;
                            image.alt = 'Foto Receta';
                            image.style = 'width: 200px; height: 200px;';

                            const link = document.createElement('a');
                            link.href = `visper/${element.id}`;
                            link.appendChild(image);

                            card.appendChild(link);
                        } catch (error) {
                            console.error(
                                "Error al parsear las rutas de las imágenes:",
                                error
                            );
                        }
                    }

                    // Cuerpo de la carta
                    const cardBody = document.createElement('div');
                    cardBody.className = 'card-body';

                    const title = document.createElement('h5');
                    title.className = 'card-title';
                    title.textContent = element.nombre;

                    const difficulty = document.createElement('p');
                    difficulty.className = 'card-text';
                    difficulty.textContent = `Dificultad: ${element.nivel}`;

                    cardBody.appendChild(title);
                    cardBody.appendChild(difficulty);

                    card.appendChild(cardBody);

                    // Agregar la carta al contenedor de resultados
                    searchResults.appendChild(card);
                });
            })
            .catch(function (error) {
                console.error(error);
            });
    });
});


