<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;

class ActualizarPerfilController extends Controller
{
    public function edit(User $user){
        return view('updatePerfil');
    }
}
