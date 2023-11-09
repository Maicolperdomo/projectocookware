<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicRecetaController extends Controller
{
    public function index(){
        return view('publicReceta');
    }
}
