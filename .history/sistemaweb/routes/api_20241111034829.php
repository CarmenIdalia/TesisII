<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    
    Route::get('/dashboard', [DashboardController::class, 'getDashboardData']);
    Route::get('/inventory', [DashboardController::class, 'getInventoryData']);
    Route::get('/sales', [DashboardController::class, 'getSalesData']);
});
