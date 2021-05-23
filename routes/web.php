<?php

// LLamar a los controladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;

Route::get('/{any}', function () {
    return view('welcome');
})->where('any','.*');

// Route::get('/',[AutenticacionController::class,'index']);

// Route::post('/autenticacion',[AutenticacionController::class,'authenticate']);

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
