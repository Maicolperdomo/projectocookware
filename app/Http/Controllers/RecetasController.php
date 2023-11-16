<?php

namespace App\Http\Controllers;

use App\Models\Cantidad;
use App\Models\Recetas;
use App\Models\Unidad;
use Illuminate\Http\Request;
use App\Models\Ingredientes;
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
        ->join('cantidads', 'recetas.cantidad_id', '=', 'cantidads.id')

        ->select('recetas.*', 'unidads.nombre as unidad', 'niveles.nivel as nivel', 'cantidads.numero as numero')
        ->get(); 
        
        return response()->json($recetas);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosReceta = [
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'pasos' => $request->input('pasos'),
            'foto' => $request->input('foto'),
            'nivel_id' => $request->input('nivel_id'),
            'tiempo_estimado' => $request->input('tiempo_estimado'),
        ];

        $receta = Recetas::create($datosReceta);

        $ingredientes = $request->input('ingredientes');

        foreach ($ingredientes as $ingrediente) {
            $nuevoIngrediente = new Ingredientes([
                'nombre' => $ingrediente['nombre'],
            ]);

            $nuevoIngrediente->receta()->associate($receta);
            $nuevoIngrediente->cantidad()->associate(Cantidad::find($ingrediente['cantidad_id']));
            $nuevoIngrediente->unidad()->associate(Unidad::find($ingrediente['unidad_id']));

            $nuevoIngrediente->save();
        }

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
