<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        $search=$request->get('search');
        $user=User::where('recetas', 'like', '%'.$search.'%');
        return view('home', compact('search'));
    }

}
