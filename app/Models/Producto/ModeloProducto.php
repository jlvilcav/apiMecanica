<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloProducto extends Model
{
    use HasFactory;

    protected $table = 'modeloproducto';
    protected $fillable = [
        'idMarcaProducto',
        'nombreModeloProducto',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
