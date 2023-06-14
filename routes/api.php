<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\RegisterController;

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

Route::middleware('auth:sanctum')->group(function(){
    Route::get('/restaurants',[ApiController::class,'index']);
    Route::get('/restaurants/{id}',[ApiController::class,'show']);
    Route::post('/restaurants',[ApiController::class,'store']);
    Route::post('/restaurants/{id}',[ApiController::class,'update']);
    Route::delete('/restaurants/{id}',[ApiController::class,'delete']);
});


Route::post('/register',[RegisterController::class,'register']);
Route::post('/login',[RegisterController::class,'login']);