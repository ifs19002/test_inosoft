<?php

use App\Http\Controllers\API\KendaraanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('kendaraan', [KendaraanController::class, 'index']);
Route::post('kendaraan/store', [KendaraanController::class, 'store']);
Route::get('kendaraan/show/{id}', [KendaraanController::class, 'show']);
Route::post('kendaraan/update/{id}', [KendaraanController::class, 'update']);
Route::delete('kendaraan/delete/{id}', [KendaraanController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
