<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

Route::post('/login', [AuthenticatedSessionController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/test', function(){
        return "I am authenticated";
    });
    
    Route::post('/logout', [AuthenticatedSessionController::class, 'logout']);
});
