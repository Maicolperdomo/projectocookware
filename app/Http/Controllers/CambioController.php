<?php

namespace App\Http\Controllers;

use App\Models\cambio;
use Illuminate\Http\Request;

class CambioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cambio');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(cambio $cambio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cambio $cambio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cambio $cambio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cambio $cambio)
    {
        //
    }
}
