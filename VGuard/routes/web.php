<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/reporte', function () {
    return view('panel');
});
Route::get('/api/panel', [PanelController::class, 'getPanelData']);