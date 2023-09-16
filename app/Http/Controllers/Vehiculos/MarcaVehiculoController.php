<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\Vehiculos\MarcaVehiculo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarcaVehiculoController extends Controller
{
    public function __construct()
    {
    }

    public function registerMarcaVehiculo(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreMarcaVehiculo'=>'required'
        ]);

        //alta de usuarios
        $MarcaVehiculo = new MarcaVehiculo();
        $MarcaVehiculo->nombreMarcaVehiculo = $request->nombreMarcaVehiculo;
        $MarcaVehiculo->bitEstado = 1;
        $MarcaVehiculo->usuCrea = $request->usuCrea;
        $MarcaVehiculo->usuMod = $request->usuMod;
        $MarcaVehiculo->save();

        return response([
            'MarcaVehiculo' => $MarcaVehiculo
        ], Response::HTTP_OK);
    }
}
