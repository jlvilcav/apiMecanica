<?php

namespace App\Models\Producto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedidaProducto extends Model
{
    use HasFactory;

    protected $table = 'medidaproducto';
    protected $fillable = [
        'nombreMedidaProducto',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
