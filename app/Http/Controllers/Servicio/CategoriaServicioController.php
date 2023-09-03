<?php

namespace App\Http\Controllers\Servicio;

use App\Http\Controllers\Controller;
use App\Models\Servicio\CategoriaServicio;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriaServicioController extends Controller
{
    public function __construct()
    {
    }

    public function registerCategoriaServicio(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreCategoriaServicio'=>'required'
        ]);

        //alta de usuarios
        $CategoriaServicio = new CategoriaServicio();
        $CategoriaServicio->nombreCategoriaServicio = $request->nombreCategoriaServicio;
        $CategoriaServicio->bitEstado = 1;
        $CategoriaServicio->usuCrea = $request->usuCrea;
        $CategoriaServicio->usuMod = $request->usuMod;
        $CategoriaServicio->save();

        return response([
            'CategoriaServicio' => $CategoriaServicio
        ], Response::HTTP_OK);
    }
}
