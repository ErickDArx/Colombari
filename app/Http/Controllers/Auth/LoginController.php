<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    // Editar las validaciones
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ],[
            'username.required'=>'El campo no puede estar vacío.',
            'password.required'=>'El campo no puede estar vacío.',
        ]);
    }

    // Decirle a Lavarel que haga la verificacion por medio del nombre de usuario
    public function username()
    {
        return 'username';
    }

}
