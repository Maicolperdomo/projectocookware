<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
 
    public function show(){
        if(Auth::check()){
            return view("home");
        }
        return view('auth.register');
    }
    
    public function register(RegisterRequest $request){

        $user = User::create($request->validated());
        // el la variable $fotosPf se me guarda la url
        $fotosPf = $request->file('foto')->store('public/fotoPerfil'); //1-nombre del imput 2-nombre de la carpeta
        //me cambia la ruta
        $foto = Storage::url($fotosPf);

        $user->update([
            'foto' => $foto,
        ]);

        return redirect('/login')->with('success', 'Usuario registrado CORRECTAMENTE');
    }

}
