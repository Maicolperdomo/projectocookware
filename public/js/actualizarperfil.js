
    $(document).ready(function() {
        // Evento click en el botón "Actualizar Perfil"
        $(".btn-success").on("click", function(e) {
            e.preventDefault(); // Evitar que el formulario se envíe automáticamente

            // Obtener los valores de los campos de entrada
            var nombre = $("#txtNombre").val();
            var apellido = $("#txtApellido").val();
            var nickname = $("#txtNickname").val();
            var correo = $("#txtCorreo").val();

            // Crear un objeto con los datos a enviar al servidor
            var datosPerfil = {
                nombre: nombre,
                apellido: apellido,
                nickname: nickname,
                correo: correo
                
            };
        })
    
    });

