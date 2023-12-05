<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgotPasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.forgot');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ]);

        $user = User::where('email', $request->email)->first();

        // Generar y guardar el token de restablecimiento de contraseña
        $resetToken = str::random(15);
        $user->update([
            'reset_password_token' => $resetToken,
            'reset_password_token_expires_at' => now()->addHours(1), // Expira en 1 horas
        ]);

        // Enviar correo electrónico con el enlace de restablecimiento
        Mail::to($user->email)->send(new ResetPasswordMail($user));

        return redirect('/login')->with('success', 'Revisa tu Correo.');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ForgotPassword $forgotPassword)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ForgotPassword $forgotPassword)
    {
        //
    }
}
