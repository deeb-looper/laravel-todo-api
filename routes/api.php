<?php

use App\Http\Controllers\V1\AuthController;
use App\Http\Controllers\V1\TodoController;
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

Route::prefix('v1')->group(function() {
    Route::post('/auth/register', [AuthController::class, 'createUser']);
    Route::post('/auth/login', [AuthController::class, 'loginUser']);

    Route::middleware('auth:sanctum')->group(function() {
        Route::apiResource('todo', TodoController::class); 
        Route::post('/auth/logout', [AuthController::class, 'logoutUser']);
    });
});



