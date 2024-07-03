<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/materiales', [MaterialController::class, 'Insertar']);
Route::put('/materiales/{id}', [MaterialController::class, 'Actualizar']);