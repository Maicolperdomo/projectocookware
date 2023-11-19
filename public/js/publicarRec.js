function mostrar() {
    axios.get("/receta")
        .then(res => {
            console.log(res)
            rec = "";
            res.data.forEach((element, index) => {
                rec += `
            <div class="card-body">
                <h5 class="card-title">${element.nombre}</h5>
                <p class="card-text">${element.descripcion}</p>
            </div>`
            });
            document.getElementById("tablaReceta").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        })
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
    // Obtén la referencia a los campos originales
    const nombreElement = document.getElementById('nomb');
    const descripcionElement = document.getElementById('descrip');
    const pasosElement = document.getElementById('pasosa');
    const subirfElement = document.getElementById('subirf');
    const tiempoeElement = document.getElementById('tiempoe');

    // Verifica que los elementos existan antes de intentar acceder a sus propiedades
    if (!nombreElement || !descripcionElement || !pasosElement || !subirfElement || !tiempoeElement) {
        console.error("Error al obtener valores de los campos originales. Alguno de los elementos no existe.");
        return;
    }

    const nombre = nombreElement.value;
    const descripcion = descripcionElement.value;
    const pasos = pasosElement.value;
    const subirf = subirfElement.value;
    const tiempoe = tiempoeElement.value;

    // Crea un array para almacenar los datos de los nuevos ingredientes
    const nuevosIngredientes = [];

    // Itera sobre los nuevos conjuntos de campos generados dinámicamente
    const ingredientesContainers = document.querySelectorAll('#ingredientesContainer > div');
    ingredientesContainers.forEach((container) => {
        const ingredienteElement = container.querySelector('[id^="ingredientes"]');
        const cantidadElement = container.querySelector('[id^="txtCantidad"]');
        const unidadElement = container.querySelector('[id^="txtUnidad"]');

        // Verifica que los elementos existan antes de intentar acceder a sus propiedades
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

    // Realiza la solicitud POST con todos los datos
    axios.post("/visper", {
        nombre: nombre,
        descripcion: descripcion,
        pasos: pasos,
        foto: subirf,
        nivel_id: txtNivel.value,
        tiempo_estimado: tiempoe,
        ingredientes: JSON.stringify(nuevosIngredientes),
    })
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















