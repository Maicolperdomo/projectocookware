<?php

namespace App\Http\Controllers;

use App\Models\Recetas;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
}
