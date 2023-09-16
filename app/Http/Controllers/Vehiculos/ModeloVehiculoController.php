<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\Vehiculos\ModeloVehiculo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModeloVehiculoController extends Controller
{
    public function __construct()
    {
    }

    public function registerModeloVehiculo(Request $request){
        //validacion de lo datos
        $request->validate([
            'idMarcaVehiculo'=>'required',
            'nombreModeloProducto'=>'required'
        ]);

        //alta de usuarios
        $ModeloVehiculo = new ModeloVehiculo();
        $ModeloVehiculo->idMarcaVehiculo = $request->idMarcaVehiculo;
        $ModeloVehiculo->nombreModeloProducto = $request->nombreModeloProducto;
        $ModeloVehiculo->bitEstado = 1;
        $ModeloVehiculo->usuCrea = $request->usuCrea;
        $ModeloVehiculo->usuMod = $request->usuMod;
        $ModeloVehiculo->save();

        return response([
            'ModeloVehiculo' => $ModeloVehiculo
        ], Response::HTTP_OK);
    }
}
