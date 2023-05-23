<?php

namespace App\Http\Controllers\Api\Seguridad;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Persona;
use Symfony\Component\HttpFoundation\Response;

class PersonaController extends Controller
{
    public function __construct()
    {
    }

    public function registerPersona(Request $request){
        //validacion de lo datos
        $request->validate([
            'apPaterno'=>'required',
            'nombres'=>'required',
            'tipoDocumento'=>'required',
            'numeroDocumento'=>'required',
            'correo'=>'required|email'
        ]);

        //alta de personas
        $persona = new Persona();
        $persona->apPaterno = $request->apPaterno;
        $persona->apMaterno = $request->apMaterno;
        $persona->nombres = $request->nombres;
        $persona->tipoDocumento = $request->tipoDocumento;
        $persona->numeroDocumento = $request->numeroDocumento;
        $persona->direccion = $request->direccion;
        $persona->telefonoUno = $request->telefonoUno;
        $persona->telefonoDos = $request->telefonoDos;
        $persona->correo = $request->correo;
        $persona->bitEstado = 1;
        $persona->usuCrea = $request->usuCrea;
        $persona->usuMod = $request->usuMod;
        $persona->save();

        return response([
            'persona' => $persona
        ], Response::HTTP_OK);
    }
}
