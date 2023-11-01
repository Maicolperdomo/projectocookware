<div class="row">
    <div class="col-md-12">
        <h1>Visitar perfil</h1>

        <form action="{{ route('perfil.update') }}" method="POST" onsubmit="return validar()">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control"  required>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary" id="boton-visitar-perfil">Visitar perfil</button>
            </div>
        </form>
    </div>
</div>

<script>
    function validar() {
        // Validamos que el formulario esté completo
        if ($('#name').val() === '' || $('#email').val() === '') {
            alert('El formulario no está completo');
            return false;
        }

        // Simulamos el evento de clic en el botón de cancelar
        $('#cancelar').click();

        // Devolvemos true para que el formulario se envíe
        return true;
    }

    // Al presionar click en el botón de visitar perfil, redirigimos al usuario a la página de perfil
    $('#boton-visitar-perfil').click(function() {
        window.location.href = "{{ route('perfil.index') }}";
    });
</script>
