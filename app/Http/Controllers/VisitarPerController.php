<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recetas;
use App\Models\User;
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
        $userId = Auth::id();
    return view('visitPerfil', ['userId' => $userId]);
        //return view('visitPerfil');
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
    'user_id' => $request->id,
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

// VisitarPerController.php
public function obtenerRecetas()
{
    $recetas = Recetas::all();
    return response()->json($recetas);
}

// VisitarPerController.php
public function obtenerRecetasU($id)
{
    $user = User::findOrFail($id); // Asegúrate de manejar el caso en que el usuario no se encuentre
    $recetas = $user->recetas;

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
