<?php

namespace App\Http\Controllers;

use App\Models\Niveles;
use App\Models\Recetas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
{
    $niveles = Niveles::all();

    return view('home', ['niveles' => $niveles]);
}

public function filterByNivel(Request $request)
{
    $nivelId = $request->input('nivel');

    $recetas = Recetas::where('nivel_id', $nivelId)->get();

    if ($request->ajax()) {
        return response()->json(['recetas' => $recetas]);
    }

    $niveles = Niveles::all();

    return view('home', [
        'recetasPorNivel' => $recetas,
        'nivelId' => $nivelId,
        'niveles' => $niveles,
    ]);
}


}
