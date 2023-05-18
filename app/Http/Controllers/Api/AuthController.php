<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth:api', ['except' => ['login','register']]);
    }

    //Metodos
    public function register(Request $request){
        //validacion de lo datos
        $request->validate([
            'nombreUsuario'=>'required',
            'numeroDocumento'=>'required|unique:users',
            'password'=>'required|confirmed',
            // 'idPersona'=>'required',
            // 'idPerfil'=>'required',
            'tipoUsuario'=>'required'
        ]);
        //alta de usuarios
        $user = new User();
        $user->nombreUsuario = $request->nombreUsuario;
        $user->numeroDocumento = $request->numeroDocumento;
        $user->password = Hash::make($request->password);
        $user->idPersona = $request->idPersona;
        $user->idPerfil = $request->idPerfil;
        $user->tipoUsuario = $request->tipoUsuario;
        $user->bitEstado = 1;
        $user->usuCrea = $request->usuCrea;
        $user->usuMod = $request->usuMod;
        $user->save();

        $token = JWTAuth::fromUser($user);

        return response([
            'user' => $user,
            'token' => $token
        ], Response::HTTP_OK);
    }

    public function login(LoginRequest $request){

        $credenciales = $request->only('numeroDocumento', 'password');

        try {
            if (!$token = JWTAuth::attempt($credenciales)) {
                return response()->json([
                    'error' => 'Invalid credentials'
                ],Response::HTTP_OK);
            }
        } catch (JWTException $e) {
            return response()->json([
                'error' => 'not token created'
            ], Response::HTTP_OK);
        }

        return response()->json([
            compact('token')
        ]);
    }

    public function userProfile(Request $request){
        return response()->json([
            "message"  => "userProfile OK",
            "userData" => auth()->user()
        ], Response::HTTP_OK);
    }

    public function logout(){
        auth()->logout();

        return response()->json([
            'message' => 'Successfully logged out'
        ], Response::HTTP_OK);
        // $cookie = Cookie::forget("cookie_token");
        // return response(["message" => "CIerre de sesion OK"], Response::HTTP_OK)->withoutCookie($cookie);
    }

    public function allUsers(){
        $users = User::all();
        return response()->json([
            "users" => $users
        ]);
    }
}
