<?php

use App\Http\Controllers\ActualizarPerfilController;
use App\Http\Controllers\CantidadController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NivelesController;
use App\Http\Controllers\RecetasController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\UnidadController;
use App\Http\Controllers\visitarPerController;
use App\Http\Controllers\VisitarRecController;
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

Route::get('/login', [LoginController::class, 'show']);

Route::post('/login', [LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index']);


Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/actualizarPerfil', [ActualizarPerfilController::class, 'edit']);

Route::put('/actualizarPerfil',[ActualizarPerfilController::class, 'update']);
//Route::post('/actualizarPerfil', 'ActualizarPerfilController@update');

//Route::get('/actualizarPerfil/{id}', [ActualizarPerfilController::class, 'mostrarPerfil'])->name('perfil.mostrar');

Route::resource('/forgot', ForgotPasswordController::class)->only(['index','store','update','destroy']);

Route::post('/forgot', [ForgotPasswordController::class, 'sendResetLinkEmail']);

Route::get('/reset-password/{token}/{email}', [ResetPasswordControllers::class, 'index'])->name('reset-password');

Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);
Route::get('forgotpassword',[LoginController::class, 'forgot']);

Route::post('forgotpassword',[LoginController::class, 'forgot_password']);

Route::get('reset/{token}',[LoginController::class, 'reset']);
Route::post('reset/{token}',[LoginController::class, 'post_reset']);

Route::resource('/receta', RecetasController::class)->only(['index','store','update','destroy']);

Route::resource('/nivel', NivelesController::class)->only(['index','store','update','destroy']);

Route::resource('/unidad', UnidadController::class)->only(['index','store','update','destroy']);

Route::resource('/ingredientes', IngredientesController::class)->only(['index','store','update','destroy']);

Route::resource('/cantidad', CantidadController::class)->only(['index','store','update','destroy']);

Route::resource('/visrec', VisitarRecController::class)->only(['index','store','update','destroy']);

Route::resource('/visper', visitarPerController::class)->only(['index','store','update','destroy']);