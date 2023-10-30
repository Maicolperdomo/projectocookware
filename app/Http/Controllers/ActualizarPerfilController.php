<?php

namespace App\Http\Controllers;

use App\Models\actualizarPerfil;
use Illuminate\Http\Request;

class ActualizarPerfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('updatePerfil');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, actualizarPerfil $actualizarPerfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(actualizarPerfil $actualizarPerfil)
    {
        //
    }
}
