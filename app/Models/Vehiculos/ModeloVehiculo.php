<?php

namespace App\Models\Vehiculos;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModeloVehiculo extends Pivot
{
    use HasFactory;

    protected $table = 'modelovehiculo';
    protected $fillable = [
        'idMarcaVehiculo',
        'nombreModeloProducto',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
