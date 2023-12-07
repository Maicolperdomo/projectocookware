<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecetaRequest;
use App\Models\Recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class RecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $recetas = DB::table('recetas')
        ->join('unidads', 'recetas.unidad_id', '=', 'unidads.id')
        ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
        ->join('cantidads', 'recetas.cantidad_id', '=', 'cantidads.id')
        ->select('recetas.*', 'unidads.nombre as unidad', 'niveles.nivel as nivel', 'cantidads.numero as numero')
        ->get(); 
        
        return response()->json($recetas);

    }

    public function obtenerRecetasPorNivel($nivelId)
{
    /*$recetas = Recetas::where('nivel_id', $nivelId)
        ->with('nivel') // Esto asume que hay una relación en el modelo Recetas llamada 'nivel'
        ->get();

    return response()->json($recetas);*/

    $recetas = DB::table('recetas')
    ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
    ->where('recetas.nivel_id', $nivelId) // Filtra por el ID del usuario
    ->select('recetas.*', 'niveles.nivel as nivel')
    ->get();
    return response()->json($recetas);
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Recetas::create($request->all());
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recetas $recetas)
    {
        Recetas::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recetas $recetas)
    {
        Recetas::findOrFail($recetas->id)->delete();
    }
}
