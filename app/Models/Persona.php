<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'apPaterno',
        'apMaterno',
        'nombres',
        'tipoDocumento',
        'numeroDocumento',
        'direccion',
        'telefonoUno',
        'telefonoDos',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}