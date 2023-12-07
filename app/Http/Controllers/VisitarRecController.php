<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Http\Request;

class VisitarRecController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('visitReceta');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    // app/Http/Controllers/VisitarRecController.php


public function like(Recetas $receta)
{
    $receta = Recetas::findOrFail($receta);
    $receta->likes++;
    $receta->save();

    return redirect()->back();
}

}
