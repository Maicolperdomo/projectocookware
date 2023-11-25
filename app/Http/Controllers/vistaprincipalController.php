<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class vistaprincipalController extends Controller
{
    public function index(){
        return view('vistaPrincipal');
    }
}
