<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use App\Models\User;
use Illuminate\Http\Request;

class VisitarPerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search=$request->get('search');
        $user=User::where('recetas', 'like', '%'.$search. '%');
        return view('visitPerfil', compact('search'));
    }

    /**
     * Store a newly created resource in storage.
     */

// Controlador en Laravel
public function store(Request $request)
{
   Recetas::create($request->all());
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recetas $recetas)
    {
        Recetas::findOrFail($request->id)->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recetas $recetas)
    {
        Recetas::findOrFail($recetas->id)->delete();
    }
}
