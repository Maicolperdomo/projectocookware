<?php

namespace App\Http\Controllers;

use App\Models\Cantidad;
use Illuminate\Http\Request;

class CantidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cantidad::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cantidad::create($request->all());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cantidad $cantidad)
    {
        Cantidad::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cantidad $cantidad)
    {
        Cantidad::findOrFail($cantidad->id)->delete();
    }
}
