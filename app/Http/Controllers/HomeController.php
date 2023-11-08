<?php

namespace App\Http\Controllers;

use App\Models\publicarReceta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }

    public function guardarReceta(Request $request)
{
    $nombre = $request->string('nombre');
    $descripcion = $request->string('descripcion');
    $ingredientes = $request->string('ingredientes');
    $unidad = $request->string('unidad');
    $pasos = $request->string('pasos');
    $foto = $request->file('foto');
    $nivel = $request->string('nivel');
    $tiempo_estimado = $request->input('tiempo_estimado');

    // Valida y guarda los datos en la base de datos
    $receta = new publicarReceta();
    $receta->nombre = $nombre;
    $receta->descripcion = $descripcion;
    $receta->ingredientes = $ingredientes;
    $receta->unidad = $unidad;
    $receta->pasos = $pasos;
    // Guarda la foto (debes implementar la lógica de almacenamiento)
    $receta->foto = $foto;
    $receta->nivel = $nivel;
    $receta->tiempo_estimado = $tiempo_estimado;

    return view('home');
}
}
