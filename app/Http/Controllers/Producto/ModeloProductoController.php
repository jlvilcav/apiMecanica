<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto\ModeloProducto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModeloProductoController extends Controller
{
    public function __construct()
    {
    }

    public function registerModeloProducto(Request $request){
        //validacion de lo datos
        $request->validate([
            'idMarcaProducto'=>'required',
            'nombreModeloProducto'=>'required'
        ]);

        //alta de usuarios
        $ModeloProducto = new ModeloProducto();
        $ModeloProducto->idMarcaProducto = $request->idMarcaProducto;
        $ModeloProducto->nombreModeloProducto = $request->nombreModeloProducto;
        $ModeloProducto->bitEstado = 1;
        $ModeloProducto->usuCrea = $request->usuCrea;
        $ModeloProducto->usuMod = $request->usuMod;
        $ModeloProducto->save();

        return response([
            'ModeloProducto' => $ModeloProducto
        ], Response::HTTP_OK);
    }
}
