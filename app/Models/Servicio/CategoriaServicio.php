<?php

namespace App\Models\Servicio;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaServicio extends Pivot
{
    use HasFactory;

    protected $table = 'categoriaservicio';
    protected $fillable = [
        'nombreCategoriaServicio',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
