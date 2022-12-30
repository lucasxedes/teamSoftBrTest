<?php

use App\Http\Controllers\ClientController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/client',[ClientController::class,'store']);
Route::get('/clients',[ClientController::class,'getList']);
Route::get('/client/{id}',[ClientController::class,'get']);
Route::put('/client/{id}',[ClientController::class,'update']);
Route::delete('/client/{id}',[ClientController::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
