<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'isbn',
        'price',
        'quantity',
        'description',
        'published_year',
        'genre',
        'publisher'
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'published_year' => 'integer',
    ];
}