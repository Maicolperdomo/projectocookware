<?php

use App\Http\Controllers\VistaPrincipalController;
use App\Http\Controllers\VerRecetasController;
use App\Http\Controllers\VisitarPerfilController;
use App\Http\Controllers\VisitarRecetaController;
use App\Http\Controllers\PublicarRecetaController;
use App\Http\Controllers\ActualizarPerfilController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('/',VistaPrincipalController::class)->only(['index','store','update','destroy']);
Route::resource('/verRecetas',VerRecetasController::class)->only(['index','store','update','destroy']);
Route::resource('/visitarPerfil',VisitarPerfilController::class)->only(['index','store','update','destroy']);
Route::resource('/visitarReceta',VisitarRecetaController::class)->only(['index','store','update','destroy']);
Route::resource('/publicarReceta',PublicarRecetaController::class)->only(['index','store','update','destroy']);
Route::resource('/actualizarPerfil',ActualizarPerfilController::class)->only(['index','store','update','destroy']);

