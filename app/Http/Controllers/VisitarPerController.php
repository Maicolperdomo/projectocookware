<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Recetas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VisitarPerController extends Controller
{
  
    public function index()
    {
        $userId = Auth::id();
        
        $cantidadRecetas = Recetas::where('user_id', $userId)->count();
     
        return view('visitPerfil', ['userId' => $userId, 'cantidadRecetas' => $cantidadRecetas]);
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
public function obtenerRecetas($id)
{
    $recetas = Recetas::all();
    $recetas = DB::table('recetas')
    ->join('niveles', 'recetas.nivel_id', '=', 'niveles.id')
    ->select('recetas.*', 'niveles.nivel as nivel')
    ->get(); 
   
}
public function obRecetas($id)
{
    $receta = Recetas::find($id);

    return response()->json($receta);
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

    public function update(Request $request, Recetas $recetas)
    {
        Recetas::findOrFail($request->id)->update($request->all());
    }

    public function eliminarReceta($id)
    {
        $receta = Recetas::find($id);
        if ($receta) {
            $receta->delete();
            return redirect('/visper');
        } 

}
public function editar(Request $request)
    {
        $request->validate([
            'recetaId' => 'required',
            'nombre'=> 'required',
            'descripcion'=> 'required',
            'ingredientes'=> 'required',
            'cantidad_id'=> 'required',
            'unidad_id'=> 'required',
            'pasos'=> 'required',
            'foto'=> 'required',
            'likes'=> 'required',
            'nivel_id'=> 'required',
            'tiempo_estimado'=> 'required',
            // Otros campos y reglas de validación
        ]);
    
        $receta = Recetas::find($request->recetaId);
    
        $receta->editar([
        'recetaId' => $request->recetaId,
        'nombre' => $request->nombre,
        'descripcion' => $request->descripcion,
        'ingredientes' => $request->ingrediente,
        'cantidad_id' => $request->cantidad_id,
        'unidad_id' => $request->unidad_id,
        'pasos' => $request->pasos,
        'foto' => $request->foto ,
        'nivel_id' => $request->nivel_id,
        'tiempo_estimado' => $request->tiempo_estimado,
           
        ]);
        $receta->save();
        return view('/visper', ['recetas' => $receta]);
       // return redirect('/visp')->with('success', 'Receta actualizada con éxito');
    }

}

    

