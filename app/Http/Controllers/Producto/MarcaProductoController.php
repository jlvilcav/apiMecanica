<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto\MarcaProducto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MarcaProductoController extends Controller
{
    public function __construct()
    {
    }

    public function registerMarcaProducto(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreMarcaProducto'=>'required'
        ]);

        //alta de usuarios
        $MarcaProducto = new MarcaProducto();
        $MarcaProducto->nombreMarcaProducto = $request->nombreMarcaProducto;
        $MarcaProducto->bitEstado = 1;
        $MarcaProducto->usuCrea = $request->usuCrea;
        $MarcaProducto->usuMod = $request->usuMod;
        $MarcaProducto->save();

        return response([
            'MarcaProducto' => $MarcaProducto
        ], Response::HTTP_OK);
    }
}
