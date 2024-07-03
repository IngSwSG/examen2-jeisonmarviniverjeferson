<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/InsertarMateriales', [Controller::class, 'Insertar']);
Route::put('/materiales/{id}', [Controller::class, 'Actualizar']);
Route::get('/ObtenerMateriales', [Controller::class, 'ObtenerMateriales']);