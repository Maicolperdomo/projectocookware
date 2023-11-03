var id = 0;

function registrar() {
    axios.post('recetas', {
        tituloReceta: txtNombre.value,
        descripcion: txtDescripcion.value,
        ingredientes: txtIngredientes.value,
        //pasoPaso: txtPasopaso.vale,
        tiempo: txtTiempo,
    })
}

