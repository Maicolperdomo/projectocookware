<div class="row">
    <div class="col-md-12">
        <h1>VistarReceta</h1>

        <form action="{{ route('perfil.update') }}" method="POST" onsubmit="return validar()">
            @csrf

            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <a href="{{ route('recetas.show', $receta->id) }}" class="btn btn-secondary">Ver receta</a>
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

    // Al presionar click en el botón de ver receta, redirigimos al usuario a la página de receta
    $('#boton-ver-receta').click(function() {
        window.location.href = "{{ route('recetas.show', $receta->id) }}";
    });

    // Al presionar enter en el botón de ver receta, redirigimos al usuario a la página de receta
    $('#boton-ver-receta').keydown(function(e) {
        if (e.keyCode === 13) {
            e.preventDefault();
            window.location.href = "{{ route('recetas.show', $receta->id) }}";
        }
    });
</script>
