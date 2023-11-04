function registrarUsuario() {
    var txtNombre = document.getElementById("txtNombre");
    var txtApellido = document.getElementById("txtApellido");
    var txtNickname = document.getElementById("txtNickname");
    var txtCorreo = document.getElementById("txtCorreo");
    var txtPassword = document.getElementById("txtPassword");
    var txtCpassword = document.getElementById("txtCpassword")

    axios.post("registros", {
        nombre: txtNombre.value,
        apellido: txtApellido.value,
        nickname: txtNickname.value,
        correo: txtCorreo.value,
        contrasena: txtPassword.value,
        confirmarcontrasena: txtCpassword
    })
        .then(function (response) {
            console.log(response);


        })
        .catch(function (error) {
            console.table(error);
        });
}