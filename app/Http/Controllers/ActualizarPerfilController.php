<?php

namespace App\Http\Controllers;

use App\Models\actualizarPerfil;
use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash; //Necesario
use Illuminate\Support\Facades\DB;

class ActualizarPerfilController extends Controller
{
    public function edit(Request $request)
    {
        $user = User::find(auth()->user()->id);
        return view('updatePerfil');
       // return view('updatePerfil', compact('actualizarperfil'));
    }

    public function update(Request $request)
    {
        $user = User::find(auth()->user()->id);

        $user->update($request->only(['name', 'lastname', 'nickname', 'email']));

        return redirect('/home')->with('success', 'Perfil actualizado con éxito');
    
    }
    
    public function NewPassword(){
        return view('updatePerfil');
    }
}


