function mostrar() {
    axios.get("/recetas")
    .then(res => {
        console.log(res);
        let rec = "";

        res.data.forEach((element, index) => {
 // La URL ya es una cadena, no necesitas JSON.parse
            const fotoUrl = element.foto.length > 0 ? element.foto[0] : '';

            rec += `
            <div class="card mb-3 mx-3 mt-4" style="width: 18rem;">
                <div class="d-flex justify-content-center">
                    <img src="${fotoUrl}" alt="Receta Imagen" width="200" height="200">
                </div>
                <div class="card-body">
                    <h5 class="card-title">${element.nombre}</h5>
                    <p class="card-text">${element.descripcion}</p>
                </div>
            </div>`;
        });

        document.getElementById("tablaReceta").innerHTML = rec;
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

mostrar();

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
            formData.append("foto[]", files[i]);
        }
    }

    // Crea un objeto FormData para manejar la carga del archivo
    formData.append('nombre', nomb.value);
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
    axios.post("/visper",formData,{})
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

















