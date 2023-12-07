<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recetas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

// Controlador en Laravel
public function store(Request $request)
{
    $fotosPf = $request->file('subirf')->store('public/fotoReceta');
    $uploadedFiles = Storage::url($fotosPf);

// Crear el producto con los datos del formulario y las imágenes almacenadas
$receta = Recetas::create([
    'user_id' => $request->user_id,
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
    $recetas = DB::table('recetas')
    ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
    ->select('recetas.*', 'niveles.nivel as nivel')
    ->get(); 
    
    return response()->json($recetas);
}

// VisitarPerController.php
public function obtenerRecetasU($id)
{
    $recetas = DB::table('recetas')
    ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
    ->where('recetas.user_id', $id) // Filtra por el ID del usuario
    ->select('recetas.*', 'niveles.nivel as nivel')
    ->get();

return response()->json($recetas);
}

public function show(Request $request)
{
        $info=Recetas::findOrFail($request->visper);
    
        return view('visitReceta', ['info' => $info]);
        /*dd($info);*/
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
