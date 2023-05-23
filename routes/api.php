<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Seguridad\PerfilController;
use App\Http\Controllers\Api\Seguridad\PersonaController;
use App\Http\Controllers\Api\Seguridad\CargoController;
use App\Http\Controllers\Api\Seguridad\EmpleadoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('register', [AuthController::class, 'register']);
Route::post('login',    [AuthController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function(){
    Route::get('userProfile',   [AuthController::class, 'userProfile']);
    Route::post('logout',       [AuthController::class, 'logout']);

    Route::post('registerPerfil',   [PerfilController::class,   'registerPerfil']);
    Route::post('registerPersona',  [PersonaController::class,  'registerPersona']);
    Route::post('registerCargo',    [CargoController::class,    'registerCargo']);
    Route::post('registerEmpleado', [EmpleadoController::class, 'registerEmpleado']);
});

Route::get('users', [AuthController::class, 'allUsers']);


