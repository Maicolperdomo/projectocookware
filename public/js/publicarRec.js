function mostrar(){
    axios.get("/receta") 
    .then(res => {
        console.log(res)
        rec = "";
        res.data.forEach((element,index) => {
            rec += ` <tr>
            <th scope="row">${index+1}</th>
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