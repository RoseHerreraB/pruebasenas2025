<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProductoController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request){
    return $request->user();
});

Route::apiResource("v1/producto",\App\Http\Controllers\Api\V1\ProductoController::class);

//Route::get('/producto','App\Http\Controllers\ProductoController@index'); //Mostrar
//Route::post('/producto','App\Http\Controllers\ProductoController@store');// Crear
//Route::put('/producto','App\Http\Controllers\ProductoController@update'); // Atualizar
//Route::delete('/producto','App\Http\Controllers\ProductoController@destroy');// Eliminar



