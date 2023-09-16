<?php

namespace App\Models\Vehiculos;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculos extends Pivot
{
    use HasFactory;

    protected $table = 'vehiculos';
    protected $fillable = [
        'idMarcaVehiculo',
        'idModeloVehiculo',
        'numPlaca',
        'vin',
        'cc',
        'color',
        'anio',
        'kilometraje',
        'idTipoVehiculo',
        'idPersona',
        'observacion',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
