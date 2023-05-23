<?php

namespace App\Http\Controllers\Api\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perfil;
use Symfony\Component\HttpFoundation\Response;

class PerfilController extends Controller
{
    public function __construct()
    {
    }

    public function registerPerfil(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombrePerfil'=>'required'
        ]);

        //alta de usuarios
        $perfil = new Perfil();
        $perfil->nombrePerfil = $request->nombrePerfil;
        $perfil->bitEstado = 1;
        $perfil->usuCrea = $request->usuCrea;
        $perfil->usuMod = $request->usuMod;
        $perfil->save();

        return response([
            'perfil' => $perfil
        ], Response::HTTP_OK);
    }
}
