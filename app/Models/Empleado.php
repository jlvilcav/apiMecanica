<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleado';
    protected $fillable = [
        'idPersona',
        'fecIngreso',
        'FecFin',
        'idCargo',
        'sueldo',
        'rutaContrato',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
