<?php

namespace App\Http\Controllers;

use App\Models\visitarReceta;
use Illuminate\Http\Request;

class VisitarRecetaController extends Controller
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
    public function update(Request $request, visitarReceta $visitarReceta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitarReceta $visitarReceta)
    {
        //
    }
}
