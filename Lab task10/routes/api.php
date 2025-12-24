<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\BookController;

// Health Check Endpoint
Route::get('/health', function () {
    return response()->json([
        'status' => 'success',
        'message' => 'Book API is running',
        'timestamp' => now()->toDateTimeString()
    ]);
});

// Book API Routes
Route::prefix('books')->group(function () {
    // GET /api/books - Get all books
    Route::get('/', [BookController::class, 'index']);
    
    // POST /api/books - Create a new book
    Route::post('/', [BookController::class, 'store']);
    
    // GET /api/books/{id} - Get a specific book
    Route::get('/{id}', [BookController::class, 'show']);
    
    // PUT /api/books/{id} - Update a book (full update)
    Route::put('/{id}', [BookController::class, 'update']);
    
    // PATCH /api/books/{id} - Update a book (partial update)
    Route::patch('/{id}', [BookController::class, 'update']);
    
    // DELETE /api/books/{id} - Delete a book
    Route::delete('/{id}', [BookController::class, 'destroy']);
});