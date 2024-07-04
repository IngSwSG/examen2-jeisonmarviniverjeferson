<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorApi;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/Insertar', [ControladorApi::class, 'Insertar']);
Route::put('/materiales/{id}', [ControladorApi::class, 'Actualizar']);
Route::get('/ObtenerMateriales', [ControladorApi::class, 'ObtenerMateriales']);

Route::get('/csrf-token', function() {
    return response()->json(['csrf_token' => csrf_token()]);
});