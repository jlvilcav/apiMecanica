<?php

namespace App\Http\Controllers\Api\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cargo;
use Symfony\Component\HttpFoundation\Response;

class CargoController extends Controller
{
    public function __construct()
    {
    }

    public function registerCargo(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombrePerfil'=>'required'
        ]);

        //alta de usuarios
        $cargo = new Cargo();
        $cargo->nombreCargo = $request->nombreCargo;
        $cargo->bitEstado = 1;
        $cargo->usuCrea = $request->usuCrea;
        $cargo->usuMod = $request->usuMod;
        $cargo->save();

        return response([
            'perfil' => $cargo
        ], Response::HTTP_OK);
    }
}
