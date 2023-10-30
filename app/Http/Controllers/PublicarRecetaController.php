<?php

namespace App\Http\Controllers;

use App\Models\publicarReceta;
use Illuminate\Http\Request;

class PublicarRecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('publicReceta');
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
    public function update(Request $request, publicarReceta $publicarReceta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(publicarReceta $publicarReceta)
    {
        //
    }
}
