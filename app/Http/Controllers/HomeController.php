<?php

namespace App\Http\Controllers;

use App\Models\Niveles;
use App\Models\Recetas;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $nivel = Niveles::all();

        return view('home', ['nivel' => $nivel]);
    }
    public function filterByNivel(Request $request)
    {
        $nivel = $request->input('nivel');

        $recetas = Recetas::where('nivel', $nivel)->get();

        return view('home', [
            'recetas' => $recetas,
            'busqueda' => "Nivel: $nivel", 
        ]);
    }

}
