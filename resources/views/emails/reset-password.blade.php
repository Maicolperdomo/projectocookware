@component('mail::message')
# Restablecer Contraseña

Hemos recibido una solicitud para restablecer la contraseña de tu cuenta.

@component('mail::button', ['url' => route('reset-password', ['token' => $user->reset_password_token, 'email' => $user->email])])
    Restablecer Contraseña
@endcomponent

Si no has solicitado un restablecimiento de contraseña, ignora este mensage y no se requiere ninguna acción.

Gracias<br>
@endcomponent
