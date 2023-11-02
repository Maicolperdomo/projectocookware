function registrarUsuario(){
    var txtNombre = document.getElementById("txtNombre");
    var nickname = document.getElementById("nickname");
    var txtEmail = document.getElementById("txtEmail");
    var txtContrasena = document.getElementById("txtContrasena");
    var txtconfcontrasena = document.getElementById("txtconfcontrasena")
    axios.post("UsuarioRegistrar", {
                nombre: txtNombre.value,
                nickname: nickname.value,
                correo : txtEmail.value,
                contrasena: txtContrasena.value,
                confirmarcontrasena : txtconfcontrasena
             })
    .then(function (response) {
                   console.log(response);
        
         read();
         clear();
        
                 })
                 .catch(function (error) {
                     console.table(error);
                 });
}