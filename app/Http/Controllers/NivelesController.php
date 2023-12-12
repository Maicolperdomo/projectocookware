<?php

namespace App\Http\Controllers;

use App\Models\Niveles;
use Illuminate\Http\Request;

class NivelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() //me muestra
    {
        return Niveles::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) //crea y guarda
    {
        Niveles::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Niveles $niveles)
    {
        Niveles::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Niveles $niveles)
    {
        Niveles::findOrFail($niveles->id)->delete();
    }
}
