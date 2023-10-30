<?php

namespace App\Http\Controllers;

use App\Models\vistaPrincipal;
use Illuminate\Http\Request;

class VistaPrincipalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
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
    public function update(Request $request, vistaPrincipal $vistaPrincipal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(vistaPrincipal $vistaPrincipal)
    {
        //
    }
}
