<?php

use App\Http\Controllers\Api\V1\AuthController;
use App\Http\Controllers\Api\V1\FileController;
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

Route::post('login',[AuthController::class,'login']);

Route::apiResource('file', FileController::class)->except(['show','update'])->middleware(['throttle:3,1','auth:sanctum']);
Route::post('file-massive', [FileController::class, 'storeMassiveFiles'])->middleware(['throttle:3,1','auth:sanctum']);
