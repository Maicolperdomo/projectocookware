<?php

namespace App\Http\Controllers;

use App\Models\visitarPerfil;
use Illuminate\Http\Request;

class VisitarPerfilController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, visitarPerfil $visitarPerfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(visitarPerfil $visitarPerfil)
    {
        //
    }
}
