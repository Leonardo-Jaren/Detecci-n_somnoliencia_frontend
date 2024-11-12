<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Rutas para la autenticacion con Google
route::get('auth/google',[GoogleController::class,'googlepage']);
route::get('auth/google/callback',[GoogleController::class,'googlecallback']);

// Ruta para login_view.blade.php
Route::get('/login', function () {
    return view('login_view'); // Cambia a 'auth.login_view' sin '.blade.php'
})->name('login');

Route::get('/register', function(){
    return view('register_view');
})->name('/register');

/* Route::get('/', function () {
    return view('resumen');
});
 */
