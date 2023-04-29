<?php

use App\Http\Controllers\API\CityController;
use App\Http\Controllers\API\HistoryController;
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

Route::get('history', [HistoryController::class, 'index']);
Route::post('history', [HistoryController::class, 'store']);
Route::get('history/{history}', [HistoryController::class, 'show']);
Route::put('history/{history}', [HistoryController::class, 'update']);
Route::delete('history/{history}', [HistoryController::class, 'destroy']);

Route::get('city', [CityController::class, 'index']);
Route::post('city', [CityController::class, 'store']);
Route::get('city/{city}', [CityController::class, 'show']);
Route::put('city/{city}', [CityController::class, 'update']);
Route::delete('city/{city}', [CityController::class, 'destroy']);