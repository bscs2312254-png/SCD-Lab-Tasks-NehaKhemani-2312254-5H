<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// Add these routes to routes/web.php (temporary fix)
Route::prefix('api')->group(function () {
    // Health Check
    Route::get('/health', function () {
        return response()->json([
            'status' => 'success',
            'message' => 'Book API is running',
            'timestamp' => now()->toDateTimeString()
        ]);
    });

    // Books Routes
    Route::get('/books', [\App\Http\Controllers\API\BookController::class, 'index']);
    Route::post('/books', [\App\Http\Controllers\API\BookController::class, 'store']);
    Route::get('/books/{id}', [\App\Http\Controllers\API\BookController::class, 'show']);
    Route::put('/books/{id}', [\App\Http\Controllers\API\BookController::class, 'update']);
    Route::patch('/books/{id}', [\App\Http\Controllers\API\BookController::class, 'update']);
    Route::delete('/books/{id}', [\App\Http\Controllers\API\BookController::class, 'destroy']);
});