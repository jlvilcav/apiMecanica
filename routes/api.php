<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\Seguridad\PerfilController;
use App\Http\Controllers\Api\Seguridad\PersonaController;
use App\Http\Controllers\Api\Seguridad\CargoController;
use App\Http\Controllers\Api\Seguridad\EmpleadoController;
use App\Http\Controllers\Producto\MarcaProductoController;
use App\Http\Controllers\Producto\CategoriaProductoController;
use App\Http\Controllers\Producto\MedidaProductoController;
use App\Http\Controllers\Producto\ModeloProductoController;
use App\Http\Controllers\Producto\ProductoController;
use App\Http\Controllers\Servicio\CategoriaServicioController;
use App\Http\Controllers\Servicio\ServicioController;
use App\Http\Controllers\Vehiculos\TipoVehiculoController;
use App\Http\Controllers\Vehiculos\MarcaVehiculoController;
use App\Http\Controllers\Vehiculos\ModeloVehiculoController;
use App\Http\Controllers\Vehiculos\VehiculosController;
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

    //Producto
    Route::post('registerMarcaProducto', [MarcaProductoController::class, 'registerMarcaProducto']);

    Route::post('registerCategoriaProducto', [CategoriaProductoController::class, 'registerCategoriaProducto']);

    Route::post('registerMedidaProducto',[MedidaProductoController::class, 'registerMedidaProducto']);

    Route::post('registerModeloProducto',[ModeloProductoController::class, 'registerModeloProducto']);

    Route::post('registerProducto',[ProductoController::class, 'registerProducto']);

    //Servicio
    Route::post('registerCategoriaServicio',[CategoriaServicioController::class, 'registerCategoriaServicio']);

    Route::post('registerServicio',[ServicioController::class, 'registerServicio']);

    //Vehiculos
    Route::post('registerTipoVehiculo',[TipoVehiculoController::class, 'registerTipoVehiculo']);

    Route::post('registerMarcaVehiculo',[MarcaVehiculoController::class, 'registerMarcaVehiculo']);

    Route::post('registerModeloVehiculo',[ModeloVehiculoController::class, 'registerModeloVehiculo']);

    Route::post('registerVehiculos',[VehiculosController::class, 'registerVehiculos']);

});

Route::get('users', [AuthController::class, 'allUsers']);


