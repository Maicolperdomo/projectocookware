// Función para mostrar la información de las recetas en la vista
function informacionReceta(recetas) {
    axios.get("/receta")
    .then(res => {
        console.log(res)
    var rece = "";
    recetas.forEach((element, index) => {
        rece += `
            <div class="card-body">
                <h5 class="card-title">${element.nombre}</h5>
                <p class="card-text">${element.descripcion}</p>
            </div>`;
    });

    // Actualiza el contenido de un elemento HTML con el id "tablaReceta"
    document.getElementById("tablaReceta").innerHTML = rece;
});
}

// Función para obtener y mostrar las recetas
function mostrar() {
    axios.get("/receta")
        .then(res => {
            console.log(res);
            // Llama a la función que muestra la información en la vista
            informacionReceta(res.data);
        })
        .catch(err => {
            console.error(err);
        });

}

mostrar();

informacionReceta();
