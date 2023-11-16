<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        ->join('cantidad', 'recetas.cantidad_id', '=', 'cantidad.id')

        ->select('recetas.*', 'unidads.nombre as unidad', 'niveles.nivel as nivel', 'cantidad.numero as numero')
        ->get(); 
        
        return response()->json($recetas);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Decodifica el campo 'ingredientes' como un array antes de insertarlo en la base de datos
    $ingredientes = json_decode($request->input('ingredientes'), true);

    // Asegúrate de que tienes los datos necesarios, incluido 'cantidad'
    // Ajusta esto según tu estructura de datos
    $datosReceta = [
        'nombre' => $request->input('nombre'),
        'descripcion' => $request->input('descripcion'),
        'pasos' => $request->input('pasos'),
        'foto' => $request->input('foto'),
        'nivel_id' => $request->input('nivel_id'),
        'tiempo_estimado' => $request->input('tiempo_estimado'),
    ];

    // Inserta la receta en la tabla 'recetas'
    $receta = Recetas::create($datosReceta);

    // Asocia los ingredientes a la receta recién creada
    $receta->ingredientes()->createMany($ingredientes);

    // Puedes devolver una respuesta adecuada, por ejemplo, el ID de la receta creada
    return response()->json(['id' => $receta->id], 201);
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
