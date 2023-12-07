<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recetas;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function autocomplete(Request $request)
    {
        $term = $request->input('term');
        
        $recetas = Recetas::where('nombre', 'LIKE', '%' . $term . '%')->get(['id', 'nombre']);

        return response()->json($recetas);
    }
}
