<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recetas;
use Illuminate\Http\Request;

class VisitarRecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visitReceta');
    }

    public function show(Request $request)
{
    $info = Recetas::findOrFail($request->visper);

    // Obtén información del usuario asociado al user_id
    $usuario = User::findOrFail($info->user_id);

    return view('visitReceta', ['info' => $info, 'usuario' => $usuario]);
}

public function mostrarPerfil($userId)
{
    // Obtén información del usuario asociado al user_id
    $usuario = User::findOrFail($userId);

    // Obtén la cantidad de recetas del usuario
    $cantidadRecetas = Recetas::where('user_id', $userId)->count();

    // Puedes pasar los datos del usuario y la cantidad de recetas a la vista perfil.blade.php
    return view('perfil', ['usuario' => $usuario, 'cantidadRecetas' => $cantidadRecetas]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
