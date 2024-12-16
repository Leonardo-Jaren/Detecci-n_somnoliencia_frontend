<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ReporteController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas protegidas con middleware de autenticación
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Rutas para la autenticación con Google
Route::get('auth/google', [GoogleController::class, 'googlepage']);
Route::get('auth/google/callback', [GoogleController::class, 'googlecallback']);

// Ruta para la vista de login
Route::get('/login', function () {
    return view('login_view'); // Nombre de la vista sin '.blade.php'
})->name('login');

// Ruta para la vista de registro (dejar solo una)
Route::get('/register', function () {
    return view('register_view'); // Nombre de la vista sin '.blade.php'
})->name('register');

// Ruta para el reporte de somnolencia
Route::get('/reporte', [ReporteController::class, 'showReporte'])->name('reporte');

// Ruta para la vista resumen
Route::get('/resumen', function () {
    return view('resumen'); // Nombre de la vista sin '.blade.php'
})->name('resumen');
