<?php



use App\Http\Controllers\AuricularController;
use Illuminate\Support\Facades\Route;

Route::get('/auriculares', [AuricularController::class, 'index']); 
Route::post('/auriculares', [AuricularController::class, 'store']); 
Route::get('/auriculares/{id}', [AuricularController::class, 'show']); 
Route::put('/auriculares/{id}', [AuricularController::class, 'update']);
Route::delete('/auriculares/{id}', [AuricularController::class, 'destroy']); 