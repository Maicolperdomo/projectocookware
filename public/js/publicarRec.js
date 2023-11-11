function mostrar() {
    axios.get("/receta")
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

            select.innerHTML = `<option selected disabled>Filtrar</option>`;

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
    axios.post("/visper",{
        nombre : nomb.value,
        descripcion : descrip.value,
        ingredientes : ingred.value,
        cantidad : cant.value,
        unidad_id : txtUnidad.value,
        pasos : pasosa.value,
        foto : subirf.value,
        nivel_id : txtNivel.value,
        tiempo_estimado : tiempoe.value,
    })
    .then(res => {
        mostrar()
        alert ("Receta publicada CORRECTAMENTE")
        console.log(res)
    })
    .catch(err => {
        console.error(err); 
    })
}

