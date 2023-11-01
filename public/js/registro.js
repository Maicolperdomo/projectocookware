function registrarUsuario(){
    var txtNombre = document.getElementById("txtNombre");
    var nickname = document.getElementById("nickname");
    var txtEmail = document.getElementById("txtEmail");
    var txtContrasena = document.getElementById("txtContrasena");
    axios.post("UsuarioRegistrar", {
                nombre: txtNombre.value,
                nickname: nickname.value
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