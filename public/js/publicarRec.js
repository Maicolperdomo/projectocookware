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
            <td>${element.unidad}</td>
            <td>${element.pasos}</td>
            <td>${element.foto}</td>
            <td>${element.nivel}</td>
            <td>${element.tiempo_estimado}</td>
            <td>${element.created_at}</td>
        </tr>`
            });
            document.getElementById("tablaReceta").innerHTML = rec;
        })
        .catch(err => {
            console.error(err);
        })

    axios.get("/unidad")
        .then(res => {
            console.log(res)
            const select = document.getElementById('txtUnidad');
            const unid = res.data;

            select.innerHTML = `<option selected disabled>Seleccionar</option>`;

            unid.forEach(uni => {
                const option = document.createElement('option');
                option.value = uni.id;
                option.text = uni.nombre;
                select.appendChild(option);
            })
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

function guardar(){
    axios.post("/receta",{
        nombre: nomb.value,
        descripcion: descrip.value,
        ingredientes: ingred.value,
        unidad_id: txtUnidad.value,
        pasos: pasosa.value,
        foto: subirf.value,
        nivel_id: txtNivel.value,
    })
    .then(res => {
        console.log(res),
        mostrar();
        alert ("Receta publicada CORRECTAMENTE")        
    })
    .catch(err => {
        console.error(err); 
    })
}
