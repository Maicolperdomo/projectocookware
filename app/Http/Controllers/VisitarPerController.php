<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecetaRequest;
use App\Models\Recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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

// Controlador en Laravel
public function store(Request $request)
{
    $fotosPf = $request->file('subirf')->store('public/fotoReceta');
    $uploadedFiles = Storage::url($fotosPf);

// Crear el producto con los datos del formulario y las imágenes almacenadas
$receta = Recetas::create([
    'nombre' => $request->nombre,
    'descripcion' => $request->descripcion,
    'ingredientes' => $request->ingredientes,
    'cantidad_id' => $request->cantidad_id,
    'unidad_id' => $request->unidad_id,
    'pasos' => $request->pasos,
    'foto' => $uploadedFiles,
    'nivel_id' => $request->nivel_id,
    'tiempo_estimado' => $request->tiempo_estimado,   
]);

$receta->save();

    return redirect('/visper');
}

public function usuarioAutenticado(){
    $userId = Auth::id();
    return view('visitPerfil', ['userId' => $userId]);
}

// VisitarPerController.php
/*public function obtenerRecetas()
{
    $recetas = Recetas::all();
    return response()->json($recetas);
}*/

// VisitarPerController.php
public function obtenerRecetas()
{
    $recetas = Recetas::all();
    foreach ($recetas as $receta) {
        // Concatenar la URL base con la ruta de la imagen
        $receta->foto = asset($receta->foto);
    }
    return response()->json($recetas);
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
