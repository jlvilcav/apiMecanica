<?php

namespace App\Http\Controllers\Producto;

use App\Http\Controllers\Controller;
use App\Models\Producto\Producto;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductoController extends Controller
{
    public function __construct()
    {
    }

    public function registerProducto(Request $request){
        //validacion de lo datos
        $request->validate([
            'idCategoriaProducto'=>'required',
            'idMarcaProducto'=>'required',
            'idModeloProducto'=>'required',
            'nombreProducto'=>'required',
            'codigoProducto'=>'required',
            'idMedidaProducto'=>'required',
            'cantMedida'=>'required',
            'stock'=>'required',
            'stockMinimo'=>'required',
            'precioCompra'=>'required',
            'precioVenta'=>'required',
        ]);

        //alta de usuarios
        $Producto = new Producto();
        $Producto->idCategoriaProducto = $request->idCategoriaProducto;
        $Producto->idMarcaProducto = $request->idMarcaProducto;
        $Producto->idModeloProducto = $request->idModeloProducto;
        $Producto->nombreProducto = $request->nombreProducto;
        $Producto->codigoProducto = $request->codigoProducto;
        $Producto->idMedidaProducto = $request->idMedidaProducto;
        $Producto->cantMedida = $request->cantMedida;
        $Producto->stock = $request->stock;
        $Producto->stockMinimo = $request->stockMinimo;
        $Producto->precioCompra = $request->precioCompra;
        $Producto->precioVenta = $request->precioVenta;
        $Producto->bitEstado = 1;
        $Producto->usuCrea = $request->usuCrea;
        $Producto->usuMod = $request->usuMod;
        $Producto->save();

        return response([
            'Producto' => $Producto
        ], Response::HTTP_OK);
    }
}
