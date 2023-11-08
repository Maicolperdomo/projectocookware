<?php

namespace App\Http\Controllers;

use App\Models\nivel;
use App\Models\unidadModel;

class NivelController extends Controller
{

    public function mostrarFormulario()
    {
        $niveles = Nivel::obtenerNivelesPredeterminados();
        $unidades = unidadModel::obtenerUnidadesPredeterminados();

        return view('home', compact('niveles', 'unidades'));
    }
    
}
