<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorApi;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/InsertarMateriales', [ControladorApi::class, 'Insertar']);
Route::put('/materiales/{id}', [ControladorApi::class, 'Actualizar']);
Route::get('/ObtenerMateriales', [ControladorApi::class, 'ObtenerMateriales']);
