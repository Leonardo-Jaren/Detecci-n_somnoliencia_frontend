<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\ReporteController;


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

//ruta para el reporte
Route::get('/reporte', [reporteController::class, 'mostrarReporte'])->name('reporte.mostrar');
Route::post('/reporte/update', [reporteController::class, 'mostrarReporte'])->name('reporte.update');
