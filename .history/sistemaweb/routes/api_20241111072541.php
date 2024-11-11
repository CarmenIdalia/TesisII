<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\API\DashboardController;

// Ruta de prueba pública
Route::get('/ping', function() {
    return response()->json(['message' => 'API funcionando correctamente', 'status' => 200]);
});

// Rutas públicas
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// Rutas protegidas
Route::middleware('auth:sanctum')->group(function () {
    // Ruta de prueba protegida
    Route::get('/test-auth', function() {
        return response()->json([
            'message' => 'Autenticación exitosa',
            'user' => auth()->user(),
            'status' => 200
        ]);
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/profile', [AuthController::class, 'profile']);
    
    Route::get('/dashboard', [DashboardController::class, 'getDashboardData']);
    Route::get('/inventory', [DashboardController::class, 'getInventoryData']);
    Route::get('/sales', [DashboardController::class, 'getSalesData']);
});
