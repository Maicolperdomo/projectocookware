<?php

namespace App\Http\Controllers;

use App\Models\verRecetas;
use Illuminate\Http\Request;

class VerRecetasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('seeRecetas');
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
    public function update(Request $request, verRecetas $verRecetas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(verRecetas $verRecetas)
    {
        //
    }
}
