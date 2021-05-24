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
}
