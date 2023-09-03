<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaProducto extends Model
{
    use HasFactory;

    protected $table = 'marcaproducto';
    protected $fillable = [
        'nombreMarcaProducto',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
