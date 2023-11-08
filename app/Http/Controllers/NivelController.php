<?php

namespace App\Http\Controllers;

use App\Models\nivel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NivelController extends Controller
{
    public function mostrarNiveles() {
        $niveles = DB::select(DB::raw("SHOW COLUMNS FROM nivels WHERE Field = 'niveles'"))[0]->Type;
        preg_match("/^enum\('(.*)'\)$/", $niveles, $matches);
        $enumValues = explode("','", $matches[1]);
    
        return view('tu-vista', compact('enumValues'));
    }
    
}
