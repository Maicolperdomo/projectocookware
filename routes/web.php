<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\NivelesController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\CantidadController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\VisitarPerController;
use App\Http\Controllers\VisitarRecController;
use App\Http\Controllers\IngredientesController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});

Route::get('/register', [RegisterController::class, 'show']);

Route::post('/register', [RegisterController::class, 'register']);

Route::resource('/forgot', ForgotPasswordController::class)->only(['index','store','update','destroy']);

Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail']);

Route::get('/reset-password/{token}/{email}', [ResetPasswordController::class, 'index'])->name('reset-password');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/visper', [VisitarPerController::class, 'usuarioAutenticado']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::resource('/receta', RecetasController::class)->only(['index','store','update','destroy']);

Route::resource('/nivel', NivelesController::class)->only(['index','store','update','destroy']);

Route::resource('/unidad', UnidadController::class)->only(['index','store','update','destroy']);

Route::resource('/ingredientes', IngredientesController::class)->only(['index','store','update','destroy']);

Route::resource('/cantidad', CantidadController::class)->only(['index','store','update','destroy']);

Route::resource('/visrec', VisitarRecController::class)->only(['index','store','update','destroy']);

Route::resource('/visper', VisitarPerController::class)->only(['index','store','update','destroy']);

Route::get('/recetas', [VisitarPerController::class, 'obtenerRecetas']);

Route::get('/contar-recetas', [VisitarPerController::class, 'contarRecetas']);
