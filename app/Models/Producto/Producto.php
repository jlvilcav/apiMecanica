<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'producto';
    protected $fillable = [
        'idCategoriaProducto',
        'idMarcaProducto',
        'idModeloProducto',
        'nombreProducto',
        'codigoProducto',
        'idMedidaProducto',
        'cantMedida',
        'stock',
        'stockMinimo',
        'precioCompra',
        'precioVenta',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
