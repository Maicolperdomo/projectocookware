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
 //public function mostrarPerfil($id)
    //{
      //   Recuperar el usuario por su ID
       // $user = User::findOrFail($id);

       // return view('updatePerfil', compact('usuario'));
    //} 
    public function edit(Request $request)
    {
        
        return view('updatePerfil');
    } 

    public function NewPassword(){
        return view('updatePerfil');
    }
}


