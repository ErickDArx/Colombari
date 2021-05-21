<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AutenticacionController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['username' => $request->usuario, 'password' => $request->contrasena, 'active' => 1])) {
            return response()->json('todo bien',200);
        }
    }
}
