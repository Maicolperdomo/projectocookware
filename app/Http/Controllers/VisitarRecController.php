<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    // Pasar $info a la vista
    return view('tu_vista', ['info' => $info, 'usuario' => $usuario]);
}

public function obtenerRecetasUsuario($userId)
    {
        try {
            // Obtén las recetas del usuario con información de niveles
            $recetas = DB::table('recetas')
                ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
                ->where('recetas.user_id', $userId)
                ->select('recetas.*', 'niveles.nivel as nivel')
                ->get();

            return response()->json($recetas);
        } catch (\Exception $e) {
            // Manejar el error, redirigir o retornar una respuesta adecuada
            return response()->json(['error' => 'Error al obtener recetas del usuario'], 500);
        }
    }

public function mostrarPerfil($userId)
{
    try {
        // Obtén información del usuario asociado al user_id
        $usuario = User::findOrFail($userId);

        // Obtén las recetas del usuario con información de niveles
        $recetas = DB::table('recetas')
            ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
            ->where('recetas.user_id', $userId)
            ->select('recetas.*', 'niveles.nivel as nivel')
            ->get();

        // Obtén la cantidad de recetas del usuario
        $cantidadRecetas = count($recetas);

        // Puedes pasar los datos del usuario, las recetas y la cantidad de recetas a la vista perfil.blade.php
        return view('perfil', ['usuario' => $usuario, 'recetas' => $recetas, 'cantidadRecetas' => $cantidadRecetas]);
    } catch (\Exception $e) {
        // Manejar el error, redirigir o retornar una respuesta adecuada
        return response()->json(['error' => 'Error al obtener información del usuario'], 500);
    }
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
