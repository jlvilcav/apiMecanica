<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\Vehiculos\TipoVehiculo;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TipoVehiculoController extends Controller
{
    public function __construct()
    {
    }

    public function registerTipoVehiculo(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreTipoVehiculo'=>'required'
        ]);

        //alta de usuarios
        $TipoVehiculo = new TipoVehiculo();
        $TipoVehiculo->nombreTipoVehiculo = $request->nombreTipoVehiculo;
        $TipoVehiculo->bitEstado = 1;
        $TipoVehiculo->usuCrea = $request->usuCrea;
        $TipoVehiculo->usuMod = $request->usuMod;
        $TipoVehiculo->save();

        return response([
            'TipoVehiculo' => $TipoVehiculo
        ], Response::HTTP_OK);
    }
}
