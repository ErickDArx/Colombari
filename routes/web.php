<?php

// LLamar a los contraladores
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticacionController;

Route::get('/',[AutenticacionController::class,'index']);

Route::post('/autenticacion',[AutenticacionController::class,'authenticate']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
