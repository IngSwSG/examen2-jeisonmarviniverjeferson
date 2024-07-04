<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorApi;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/InsertarMateriales', [ControladorApi::class, 'Insertar']);
Route::put('/materiales/{id}', [ControladorApi::class, 'Actualizar']);
Route::get('/ObtenerMateriales', [ControladorApi::class, 'ObtenerMateriales']);