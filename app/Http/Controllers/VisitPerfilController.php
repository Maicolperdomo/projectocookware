<?php

namespace App\Http\Controllers;

use App\Models\visitPerfil;
use Illuminate\Http\Request;

class VisitPerfilController extends Controller
{
    public function show()
    {
        return view('visitPerfil');
    
    }
    
    
}