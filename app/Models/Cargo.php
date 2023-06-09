<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'cargo';
    protected $fillable = [
        'nombreCargo',
        'bitEstado',
        'usuCrea',
        'usuMod'
    ];
}
