<?php

namespace App\Http\Controllers\Api\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;
use Symfony\Component\HttpFoundation\Response;

class EmpleadoController extends Controller
{
    public function __construct()
    {
    }

    public function registerEmpleado(Request $request){
        //validacion de lo datos
        $request->validate([
            'idPersona'=>'required',
            'fecIngreso'=>'required',
            'FecFin'=>'required',
            'idCargo'=>'required',
            'sueldo'=>'required',
            'rutaContrato'=>'required'
        ]);

        //alta de personas
        $empleado = new Empleado();
        $empleado->idPersona = $request->idPersona;
        $empleado->fecIngreso = $request->fecIngreso;
        $empleado->FecFin = $request->FecFin;
        $empleado->idCargo = $request->idCargo;
        $empleado->sueldo = $request->sueldo;
        $empleado->rutaContrato = $request->rutaContrato;
        $empleado->bitEstado = 1;
        $empleado->usuCrea = $request->usuCrea;
        $empleado->usuMod = $request->usuMod;
        $empleado->save();

        return response([
            'persona' => $empleado
        ], Response::HTTP_OK);
    }
}
