<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaProducto extends Model
{
    use HasFactory;

    protected $table = 'categoriaproducto';
    protected $fillable = [
        'nombreCategoria',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
