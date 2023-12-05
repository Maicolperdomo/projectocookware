<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ResetPasswordController extends Controller
{
    public function index($token)
{
    return view('auth.reset', ['token' => $token]);
}

    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'token' => 'required|string',
            'password' => 'required|min:8',
        ]);

        $user = User::where('email', $request->email)
            ->where('reset_password_token', $request->token)
            ->where('reset_password_token_expires_at', '>', now())
            ->first();

        if (!$user) {
            return redirect()->to('/login')->withErrors('Token de restablecimiento de contraseña no válido o expirado.');
        }

        // Actualizar la contraseña y limpiar el token
        $user->update([
            'password' => Hash::make($request->password),
            'reset_password_token' => null,
            'reset_password_token_expires_at' => null,
        ]);

        return redirect('/login')->with('success', 'Contrasena ACTUALIZADA.');
    }
}
