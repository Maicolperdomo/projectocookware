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

    // Puedes pasar los datos del usuario a la vista
    return view('visitPerfil', ['usuario' => $usuario]);
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
