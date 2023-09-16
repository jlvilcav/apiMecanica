<?php

namespace App\Models\Vehiculos;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoVehiculo extends Pivot
{
    use HasFactory;

    protected $table = 'tipovehiculo';
    protected $fillable = [
        'nombreTipoVehiculo',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
