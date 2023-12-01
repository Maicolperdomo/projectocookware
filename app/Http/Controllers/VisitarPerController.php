<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecetaRequest;
use App\Models\Recetas;
use Illuminate\Http\Request;
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
// Almacenar las imágenes en el sistema de archivos y obtener las rutas
$uploadedFiles = [];

// Verificar si $request->file('imagenes') no es null y es un array antes de intentar recorrerlo
$imagenes = $request->file('subirf');
if (!is_null($imagenes) && is_array($imagenes)) {
    foreach ($imagenes as $imagen) {
        $rutaImagen = $imagen->store('public/fotoReceta');
        $uploadedFiles[] = Storage::url($rutaImagen);
    }
}

// Crear el producto con los datos del formulario y las imágenes almacenadas
$producto = Recetas::create([
    'nombre' => $request->nombre,
    'descripcion' => $request->descripcion,
    'ingredientes' => $request->ingredientes,
    'cantidad_id' => $request->cantidad_id,
    'unidad_id' => $request->unidad_id,
    'pasos' => $request->pasos,
    'foto' => json_encode($uploadedFiles),
    'nivel_id' => $request->nivel_id,
    'tiempo_estimado' => $request->tiempo_estimado,   
]);

$producto->save();

    return redirect('/visper');
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
