<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;

class VisitarPerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visitPerfil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Asegúrate de tener todos los datos necesarios, ajusta según tu estructura de datos
        $datosReceta = [
            'nombre' => $request->input('nombre'),
            'descripcion' => $request->input('descripcion'),
            'ingredientes' => $request->input('ingredientes'), // Asegúrate de que estás recibiendo los ingredientes en formato JSON
            'cantidad_id' => $request->input('txtCantidad'),
            'unidad_id' => $request->input('txtUnidad'),
            'pasos' => $request->input('pasos'),
            'foto' => $request->input('foto'),
            'nivel_id' => $request->input('nivel_id'),
            'tiempo_estimado' => $request->input('tiempo_estimado'),
        ];

        // Inserta la receta en la tabla 'recetas'
        $receta = Recetas::create($datosReceta);

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
