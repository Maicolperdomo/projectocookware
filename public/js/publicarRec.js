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

function read(url="recetas") {
    axios.get(url)
        .then(function (response) {
            let datos = "";
            let lista = '';
            response.data.data.forEach((element, index) => {
                datos += `<tr onclick='loadData(${JSON.stringify(element)})'>`
                datos += `<td>${index + 1}</td>`;
                datos += `<td>${element.tituloReceta}</td>`;
                datos += `<td>${element.descripcion}</td>`;
                datos += `<td>${element.ingredientes}</td>`;
                datos += `<td>${element.pasoPaso}</td>`;
                datos += `<td>${element.tiempo}</td>`;
                datos += `</tr>`
            });

            response.data.links.forEach(element => {
                console.log(element);
                lista += `<td>
                <a class="pagina" onclick="read('${element.url}')">${element.label}
                </td>`;

            });
            list.innerHTML = lista;
            tableBody.innerHTML = datos;
        })
        .catch(function (error) {
            console.log(error);
        });
}