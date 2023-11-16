function mostrar() {
    /*axios.get("/receta")
        .then(res => {
            console.log(res)
            rec = "";
            res.data.forEach((element, index) => {
                rec += `
        <div>
                <h3>${element.nombre}</h3>
            </div>
            <div>
                <h3>Descripcion</h3>
                <p>${element.descripcion}</p>
            </div>
            <div>
                <h3>Ingredientes</h3>
                <ul><li>${element.ingredientes}</li></ul>
            </div>
            <div>
            <div>
                <h3>Ingredientes</h3>
                <ul><li>${element.cantidad}</li></ul>
            </div>
            <div>
                <h3>Unidad</h3>
                <p>${element.unidad}</p>
            </div>
            <div>
                <h3>Pasos</h3>
                <p>${element.pasos}</p>
            </div>
            <div>
                <h3>Foto</h3>
                <p>${element.foto}</p>
            </div>
            <div>
                <h3>Nivel</h3>
                <p>${element.nivel}</p>
            </div>
            <div>
                <h3>Tiempo Estimado</h3>
                <p>${element.tiempo_estimado}</p>
            </div>
            <div>
                <h3>Fecha de publicacion</h3>
                <p>${element.created_at}</p>
            </div>`
            });
            document.getElementById("tablaReceta").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        })*/

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
    nuevoIngrediente.innerHTML = `
        <div class="col-12 d-flex justify-content-evenly">
            <div class="me-2">
                <label class="form-label">Ingredientes</label>
                <div>
                    <input type="text" name="ingredientes" class="form-control"
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

function guardar() {
    // Obtén la referencia a los campos originales
    const nombre = document.getElementById('nomb').value;
    const descripcion = document.getElementById('descrip').value;
    const pasos = document.getElementById('pasosa').value;
    const subirf = document.getElementById('subirf').value;
    const tiempoe = document.getElementById('tiempoe').value;

    // Crea un array para almacenar los datos de los nuevos ingredientes
    const nuevosIngredientes = [];

    // Itera sobre los nuevos conjuntos de campos generados dinámicamente
    const ingredientesContainers = document.querySelectorAll('#ingredientesContainer > div');
    ingredientesContainers.forEach(container => {
        const ingrediente = {
            nombre: container.querySelector('[name="ingredientes"]').value,
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
        ingredientes: nuevosIngredientes, // No es necesario convertir a cadena JSON
    })
    .then(res => {
        mostrar();
        alert("Receta publicada CORRECTAMENTE");
        console.log(res);
    })
    .catch(err => {
        console.error(err);
    });
}






