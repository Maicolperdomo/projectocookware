var id;

function registrarUsu() {
    axios.post("votantes", {
        nombre: txtNombre.value,
        cedula: txtCedula.value

    })
    }