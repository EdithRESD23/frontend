<?php

use App\Http\Controllers\RopaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/respuesta', function(){
    return 'Hola si funciona bien';
});

Route::get('/lista',[RopaController::class,'index']);
Route::post('/lista',[RopaController::class,'store']);
Route::get('/lista/{id}',[RopaController::class,'show']);
Route::put('/lista/{id}',[RopaController::class,'update']);
Route::delete('/lista/{id}',[RopaController::class,'destroy']);


