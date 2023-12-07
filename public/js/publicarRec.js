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
                            rec += `<a href="visper/${element.id}"><img src="${element.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;"></a>`;
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

            select.innerHTML = `<option selected disabled>Seleccionar</option>`;

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

function actualizarUnidades(selectId) {
    axios.get("/unidad")
        .then(res => {
            console.log(res);
            const select = document.getElementById(selectId);
            const unid = res.data;

            select.innerHTML = `<option selected disabled>Seleccionar</option>`;

            unid.forEach(uni => {
                const option = document.createElement('option');
                option.value = uni.id;
                option.text = uni.nombre;
                select.appendChild(option);
            });
        })
        .catch(err => {
            console.error(err);
            // Aquí podrías manejar el error de una manera más amigable para el usuario
        });
}

document.addEventListener('DOMContentLoaded', function () {
    actualizarUnidades('txtUnidad');
});

function actualizarCantidad(selectIdC) {
    axios.get("/cantidad")
        .then(res => {
            console.log(res)
            const select = document.getElementById(selectIdC);
            const cantidades = res.data;

            select.innerHTML = `<option selected disabled>Seleccionar</option>`;

            cantidades.forEach(cant => {
                const option = document.createElement('option');
                option.value = cant.id;
                option.text = cant.numero;
                select.appendChild(option);
            })
        })
        .catch(err => {
            console.error(err);
            // Aquí podrías manejar el error de una manera más amigable para el usuario
        });
}

document.addEventListener('DOMContentLoaded', function () {
    actualizarCantidad('txtCantidad');
});

function agregarIngrediente() {
    // Crea un nuevo conjunto de campos
    var nuevoIngrediente = document.createElement('div');
    var nuevoIdSelect = 'txtUnidad_' + Date.now();  // Genera un ID único
    var nuevoIdCantidad = 'txtCantidad_' + Date.now();
    var nuevoIdIngrediente = 'ingredientes_' + Date.now();
    nuevoIngrediente.innerHTML = `
        <div class="col-12 d-flex justify-content-evenly">
            <div class="me-2">
                <label class="form-label">Ingredientes</label>
                <div>
                    <input type="text" id="${nuevoIdIngrediente}" class="form-control"
                        aria-label="Text input with dropdown button" placeholder="Ingrediente">
                </div>
            </div>
            <div class="me-2">
                <label class="form-label" for="${nuevoIdCantidad}">Cantidad:</label>
                <div>
                    <select id="${nuevoIdCantidad}" class="form-control">
                        <option selected disabled>Seleccionar</option>
                    </select>
                </div>
            </div>
            <div>
                <label class="form-label" for="${nuevoIdSelect}">Unidad:</label>
                <div>
                    <select id="${nuevoIdSelect}" class="form-control">
                        <option selected disabled>Seleccionar</option>
                    </select>
                </div>
            </div>
        </div>
    `;

    // Agrega el nuevo conjunto de campos al contenedor
    document.getElementById('ingredientesContainer').appendChild(nuevoIngrediente);
    console.log("Agregando ingrediente...");

    // Llama a las funciones de actualización de unidades y cantidades
    actualizarCantidad(nuevoIdCantidad);
    actualizarUnidades(nuevoIdSelect);
}

function limpiarCampos() {
    // Restablece los valores de los campos originales
    document.getElementById('nomb').value = '';
    document.getElementById('descrip').value = '';
    document.getElementById('pasosa').value = '';
    document.getElementById('subirf').value = '';
    document.getElementById('tiempoe').value = '';

    // Elimina los campos dinámicos
    const contenedorIngredientes = document.getElementById('ingredientesContainer');
    contenedorIngredientes.innerHTML = '';
}

function guardar() {
    const formulario = document.getElementById('miFormularioId');
    // Obtén la referencia a los campos originales
    const formData = new FormData(formulario);
    const files = document.getElementById("subirf").files;

    if (files.length > 0) {
        for (let i = 0; i < files.length; i++) {
            formData.append("foto", files[i]);
        }
    }

    // Crea un objeto FormData para manejar la carga del archivo
    formData.append('nombre', nomb.value);
    formData.append('user_id', iduser.value);
    formData.append('descripcion', descrip.value);
    formData.append('pasos', pasosa.value);
    formData.append('nivel_id', txtNivel.value);
    formData.append('tiempo_estimado', tiempoe.value);

    // Agrega los datos de los nuevos ingredientes
    const nuevosIngredientes = [];

    const ingredientesContainers = document.querySelectorAll('#ingredientesContainer > div');
    ingredientesContainers.forEach((container) => {
        const ingredienteElement = container.querySelector('[id^="ingredientes"]');
        const cantidadElement = container.querySelector('[id^="txtCantidad"]');
        const unidadElement = container.querySelector('[id^="txtUnidad"]');

        if (!ingredienteElement || !cantidadElement || !unidadElement) {
            console.error("Error al obtener valores de los campos de ingredientes dinámicos. Alguno de los elementos no existe.");
            return;
        }

        const ingrediente = {
            nombre: ingredienteElement.value,
            cantidad: cantidadElement.value,
            unidad: unidadElement.value,
        };

        nuevosIngredientes.push(ingrediente);
    });

    formData.append('ingredientes', JSON.stringify(nuevosIngredientes));

    // Realiza la solicitud POST con todos los datos
    axios.post("/visper", formData, {})
        .then(res => {
            mostrar();
            alert("Receta publicada CORRECTAMENTE");
            console.log(res);
            // Limpia los campos después de guardar
            limpiarCampos();
        })
        .catch(err => {
            console.error(err);
        });
}

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
            let rec = "";

            res.data.forEach((element, index) => {
                rec += `<div class="card mx-2 my-3 d-flex align-items-center" style="width: 220px; height: 290px">`;
                if (element.foto) {
                    try {

                        if (element.foto) {
                            rec += `<a href="visper/${element.id}"><img src="${element.foto}" class="mt-2" alt="Foto Receta" style="width: 200px; height: 200px;"></a>`;
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
                            <p class="card-text" id="nivell">Dificultad: ${element.nivel}</p>
                        </div>`
                rec += `</div>`;
            });

            document.getElementById("searchResults").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        });
    });
});