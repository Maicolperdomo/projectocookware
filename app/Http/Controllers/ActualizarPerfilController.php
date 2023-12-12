<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class ActualizarPerfilController extends Controller
{
    public function index()
    {
        return view('updatePerfil');
    }
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'foto' => 'required',
            // Otros campos y reglas de validación
        ]);
    
        $user = User::find(auth()->user()->id);
    
        $user->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'nickname' => $request->nickname,
            'foto' => $request->foto,
            // Otros campos
        ]);
    
        return redirect('/visper')->with('success', 'Perfil actualizado con éxito');
    }
    

}


