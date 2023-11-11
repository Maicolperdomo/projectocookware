<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function Laravel\Prompts\password;

class PasswordResetLinkController extends Controller
{
    public function create()
    {
        return view('auth.forgot-password');
    }
    public function store(Request $request)
    {
        $request->validate([
        'email' => 'required| email',
    ]);
    }



}
