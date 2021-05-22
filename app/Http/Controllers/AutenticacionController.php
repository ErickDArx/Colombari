<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AutenticacionController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function authenticate(Request $request)
    {
        //Tomas las credenciales del request
        $credentials = $request->only('username', 'password');
        //intentar encontrar al usuario en la base de datos con esas credenciales
        //Laravel hashea la passowrd solo
        if (Auth::attempt($credentials)) {
            // Si las credenciales son correctas, hacer cosas!
            // intended() devuelve al usuario a donde intentaba acceder
            // y acepta un default value
            return response()->json('Has iniciado sesion', 200);
        } else {
            return response()->json(['errors' => ['login' => [$request->usuario, $request->contrasena]]], 422);
        }
    }


    public function authenticated(Request $request)
    {
        if (Auth::attempt(['username' => $request->usuario, 'password' => $request->contrasena])) {
            return response()->json('Has iniciado sesion', 200);
        } else {
            return response()->json(['errors' => ['login' => [$request->usuario, $request->contrasena]]], 422);
        }
    }
}
