<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    //Metodos
    public function register(Request $request){
        //validacion de lo datos
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|confirmed',
            'tipo_doc'=>'required',
            'nro_documento'=>'required'
        ]);
        //alta de usuarios
        $user = new User();
        $user->name = $request->name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->tipo_doc = $request->tipo_doc;
        $user->nro_documento = $request->nro_documento;
        $user->domicilio = $request->domicilio;
        $user->telefono = $request->telefono;
        $user->save();

        return response($user, Response::HTTP_OK);
    }

    public function login(Request $request){

        $credenciales = $request->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);

        if (Auth::attempt($credenciales)) {
            $user = Auth::user();
            $token = $user->createToken('token')->plainTextToken;
            $cookie = cookie('cookie_token', $token, 60 * 24);

            return response(["token"=>$token], Response::HTTP_OK)->withoutCookie($cookie);
        } else {
            return response(["message"=>"Credenciales inválidas"],Response::HTTP_UNAUTHORIZED);
        }
    }

    public function userProfile(Request $request){
        return response()->json([
            "message"  => "userProfile OK",
            "userData" => auth()->user()
        ], Response::HTTP_OK);
    }

    public function logout(){
        $cookie = Cookie::forget("cookie_token");
        return response(["message" => "CIerre de sesion OK"], Response::HTTP_OK)->withoutCookie($cookie);
    }

    public function allUsers(){
        $users = User::all();
        return response()->json([
            "users" => $users
        ]);
    }
}
