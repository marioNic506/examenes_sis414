<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Http\Controllers\AuricularController;

Route::get('/auriculares', [AuricularController::class, 'index']);
Route::post('/auriculares', [AuricularController::class, 'store']);
Route::get('/auriculares/{id}', [AuricularController::class, 'show']);
Route::put('/auriculares/{id}', [AuricularController::class, 'update']);
Route::delete('/auriculares/{id}', [AuricularController::class, 'destroy']);
