function informacionReceta() {
    axios.get("receta")
    .then(response => {
        // Accede a la información de nombre y descripción desde la respuesta del servidor
        const nombre = response.data.nombre;
        const descripcion = response.data.descripcion;

        // Haz lo que necesites con la información obtenida
        console.log("Nombre de la receta:", nombre);
        console.log("Descripción de la receta:", descripcion);
    })
    .catch(error => {
        console.error("Error al obtener la información de nombre y descripción:", error);
    });
}
informacionReceta();