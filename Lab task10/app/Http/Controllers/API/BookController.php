<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $books = Book::all();
            return response()->json([
                'success' => true,
                'message' => 'Books retrieved successfully',
                'data' => $books
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve books',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'author' => 'required|string|max:255',
                'isbn' => 'required|string|unique:books,isbn|max:13',
                'price' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'description' => 'nullable|string',
                'published_year' => 'required|integer|min:1900|max:' . date('Y'),
                'genre' => 'required|string|max:100',
                'publisher' => 'required|string|max:255'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }

            $book = Book::create($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Book created successfully',
                'data' => $book
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $book = Book::find($id);

            if (!$book) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found'
                ], 404);
            }

            return response()->json([
                'success' => true,
                'message' => 'Book retrieved successfully',
                'data' => $book
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to retrieve book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $book = Book::find($id);

            if (!$book) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found'
                ], 404);
            }

            $validator = Validator::make($request->all(), [
                'title' => 'sometimes|required|string|max:255',
                'author' => 'sometimes|required|string|max:255',
                'isbn' => 'sometimes|required|string|max:13|unique:books,isbn,' . $id,
                'price' => 'sometimes|required|numeric|min:0',
                'quantity' => 'sometimes|required|integer|min:0',
                'description' => 'nullable|string',
                'published_year' => 'sometimes|required|integer|min:1900|max:' . date('Y'),
                'genre' => 'sometimes|required|string|max:100',
                'publisher' => 'sometimes|required|string|max:255'
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation error',
                    'errors' => $validator->errors()
                ], 422);
            }

            $book->update($request->all());

            return response()->json([
                'success' => true,
                'message' => 'Book updated successfully',
                'data' => $book
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update book',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $book = Book::find($id);

            if (!$book) {
                return response()->json([
                    'success' => false,
                    'message' => 'Book not found'
                ], 404);
            }

            $book->delete();

            return response()->json([
                'success' => true,
                'message' => 'Book deleted successfully',
                'data' => null
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete book',
                'error' => $e->getMessage()
            ], 500);
        }
    }
}