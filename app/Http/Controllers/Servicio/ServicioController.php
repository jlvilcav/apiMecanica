<?php

namespace App\Http\Controllers\Servicio;

use App\Http\Controllers\Controller;
use App\Models\Servicio\Servicio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ServicioController extends Controller
{
    public function __construct()
    {
    }

    public function registerServicio(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreServicio'=>'required',
            'idCategoriaServicio'=>'required',
            'codigoServicio'=>'required',
            'costoServicio'=>'required',
        ]);

        //alta de usuarios
        $Servicio = new Servicio();
        $Servicio->nombreServicio = $request->nombreServicio;
        $Servicio->idCategoriaServicio = $request->idCategoriaServicio;
        $Servicio->codigoServicio = $request->codigoServicio;
        $Servicio->costoServicio = $request->costoServicio;
        $Servicio->bitEstado = 1;
        $Servicio->usuCrea = $request->usuCrea;
        $Servicio->usuMod = $request->usuMod;
        $Servicio->save();

        return response([
            'Servicio' => $Servicio
        ], Response::HTTP_OK);
    }
}
