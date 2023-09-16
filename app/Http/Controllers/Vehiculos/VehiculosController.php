<?php

namespace App\Http\Controllers\Vehiculos;

use App\Http\Controllers\Controller;
use App\Models\Vehiculos\Vehiculos;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VehiculosController extends Controller
{
    public function __construct()
    {
    }

    public function registerVehiculos(Request $request){
        //validacion de lo datos
        $request->validate([
            'idMarcaVehiculo'=>'required',
            'idModeloVehiculo'=>'required',
            'numPlaca'=>'required',
            'vin'=>'required',
            'cc'=>'required',
            'color'=>'required',
            'anio'=>'required',
            'kilometraje'=>'required',
            'idTipoVehiculo'=>'required',
            'idPersona'=>'required',
            'observacion'=>'required'
        ]);

        //alta de usuarios
        $Vehiculos = new Vehiculos();
        $Vehiculos->idMarcaVehiculo = $request->idMarcaVehiculo;
        $Vehiculos->idModeloVehiculo = $request->idModeloVehiculo;
        $Vehiculos->numPlaca = $request->numPlaca;
        $Vehiculos->vin = $request->vin;
        $Vehiculos->cc = $request->cc;
        $Vehiculos->color = $request->color;
        $Vehiculos->anio = $request->anio;
        $Vehiculos->kilometraje = $request->kilometraje;
        $Vehiculos->idTipoVehiculo = $request->idTipoVehiculo;
        $Vehiculos->idPersona = $request->idPersona;
        $Vehiculos->observacion = $request->observacion;
        $Vehiculos->bitEstado = 1;
        $Vehiculos->usuCrea = $request->usuCrea;
        $Vehiculos->usuMod = $request->usuMod;
        $Vehiculos->save();

        return response([
            'Vehiculos' => $Vehiculos
        ], Response::HTTP_OK);
    }
}
