<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto\CategoriaProducto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriaProductoController extends Controller
{
    public function __construct()
    {
    }

    public function registerCategoriaProducto(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreCategoria'=>'required'
        ]);

        //alta de usuarios
        $CategoriaProducto = new CategoriaProducto();
        $CategoriaProducto->nombreCategoria = $request->nombreCategoria;
        $CategoriaProducto->bitEstado = 1;
        $CategoriaProducto->usuCrea = $request->usuCrea;
        $CategoriaProducto->usuMod = $request->usuMod;
        $CategoriaProducto->save();

        return response([
            'CategoriaProducto' => $CategoriaProducto
        ], Response::HTTP_OK);
    }
}
