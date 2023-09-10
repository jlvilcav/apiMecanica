<?php

namespace App\Models\Servicio;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Pivot
{
    use HasFactory;

    protected $table = 'servicio';
    protected $fillable = [
        'nombreServicio',
        'idCategoriaServicio',
        'codigoServicio',
        'costoServicio',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
