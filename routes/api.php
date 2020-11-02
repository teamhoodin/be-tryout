<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserApiController;
use App\Http\Controllers\Api\GameApiController;
use App\Http\Controllers\Api\ReviewApiController;

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

Route::get('/users', UserApiController::class . '@index');
Route::get('/games', GameApiController::class . '@index');
Route::get('/reviews', ReviewApiController::class . '@index');
