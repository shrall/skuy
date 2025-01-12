<?php

use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\EventController;
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

Route::post('api-register', [RegisterController::class, 'register']);
Route::apiResource('event', EventController::class);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
