<?php

namespace App\Http\Controllers;

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
public function store(RecetaRequest $request)
{
    // Validar y crear la receta
    $receta = Recetas::create($request->validated());

    // Obtener la foto del request y almacenarla
    if ($request->hasFile('subirf')) {
        $fotoRect = $request->file('subirf')->store('public/fotoReceta');
        $fotor = Storage::url($fotoRect);

        // Actualizar la foto de la receta
        $receta->update([
            'foto' => $fotor,
        ]);
    }

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
