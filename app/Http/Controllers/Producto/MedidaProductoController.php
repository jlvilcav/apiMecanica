<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto\MedidaProducto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MedidaProductoController extends Controller
{
    public function __construct()
    {
    }

    public function registerMedidaProducto(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreMedidaProducto'=>'required'
        ]);

        //alta de usuarios
        $MedidaProducto = new MedidaProducto();
        $MedidaProducto->nombreMedidaProducto = $request->nombreMedidaProducto;
        $MedidaProducto->bitEstado = 1;
        $MedidaProducto->usuCrea = $request->usuCrea;
        $MedidaProducto->usuMod = $request->usuMod;
        $MedidaProducto->save();

        return response([
            'MedidaProducto' => $MedidaProducto
        ], Response::HTTP_OK);
    }
}
