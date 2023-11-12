<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //Necesario
use Illuminate\Support\Facades\DB;

class ActualizarPerfilController extends Controller
{
    public function edit(User $user){
        return view('updatePerfil');
    }
    public function NewPassword(){
        return view('updatePerfil');
    }

}
