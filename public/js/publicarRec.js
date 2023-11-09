function mostrar() {
    axios.get("/receta")
        .then(res => {
            console.log(res)
            rec = "";
            res.data.forEach((element, index) => {
                rec += ` <tr>
            <th scope="row">${index + 1}</th>
            <td>${element.nombre}</td>
            <td>${element.descripcion}</td>
            <td>${element.ingredientes}</td>
            <td>${element.unidad_id}</td>
            <td>${element.pasos}</td>
            <td>${element.foto}</td>
            <td>${element.nivel_id}</td>
            <td>${element.tiempo_estimado}</td>
            <td>${element.created_at}</td>
        </tr>`
            });
            document.getElementById("tablaReceta").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        })
}

mostrar();

function Traeunidad() {
    axios.get("/unidad")
        .then(res => {
            const select = document.getElementById('txtUnidad');
            const unid = res.data;

            select.innerHTML = `<option selected disabled>Seleccionar</option>`;

            unid.forEach(unidades => {
                const option = document.createElement('option');
                option.value = unidades.id;
                option.text = unidades.Nombre;
                select.appendChild(option);
            })
        })
        .catch(err => {
            console.error(err);
        })
}

Traeunidad();