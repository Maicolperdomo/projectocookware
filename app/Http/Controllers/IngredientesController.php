<?php

namespace App\Http\Controllers;

use App\Models\Ingredientes;
use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //me muestra
    {
        return Ingredientes::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //crea y guarda
    {
        Ingredientes::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ingredientes $ingredientes)
    {
        Ingredientes::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ingredientes $ingredientes)
    {
        Ingredientes::findOrFail($ingredientes->id)->delete();
    }
}
