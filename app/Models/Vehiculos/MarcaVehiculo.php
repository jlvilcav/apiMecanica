<?php

namespace App\Models\Vehiculos;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarcaVehiculo extends Pivot
{
    use HasFactory;

    protected $table = 'marcavehiculo';
    protected $fillable = [
        'nombreMarcaVehiculo',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
