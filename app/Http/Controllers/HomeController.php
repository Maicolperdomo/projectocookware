<?php

namespace App\Http\Controllers;

use App\Models\Recetas;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function obtenerRecetas()
{
    $recetas = Recetas::all();
    foreach ($recetas as $receta) {
        // Concatenar la URL base con la ruta de la imagen
        $receta->foto = asset($receta->foto);
    }
    return response()->json($recetas);
}
}
