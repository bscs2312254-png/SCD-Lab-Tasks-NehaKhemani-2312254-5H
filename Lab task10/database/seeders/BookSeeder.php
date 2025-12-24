<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'isbn' => '9780446310789',
                'price' => 15.99,
                'quantity' => 50,
                'description' => 'A novel about the serious issues of rape and racial inequality.',
                'published_year' => 1960,
                'genre' => 'Fiction',
                'publisher' => 'J.B. Lippincott & Co.'
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'isbn' => '9780451524935',
                'price' => 12.50,
                'quantity' => 75,
                'description' => 'A dystopian social science fiction novel and cautionary tale.',
                'published_year' => 1949,
                'genre' => 'Dystopian',
                'publisher' => 'Secker & Warburg'
            ],
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'isbn' => '9780743273565',
                'price' => 10.99,
                'quantity' => 60,
                'description' => 'A story of the fabulously wealthy Jay Gatsby and his love for Daisy Buchanan.',
                'published_year' => 1925,
                'genre' => 'Classic',
                'publisher' => 'Charles Scribner\'s Sons'
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'isbn' => '9780141439518',
                'price' => 8.99,
                'quantity' => 100,
                'description' => 'A romantic novel of manners that depicts the emotional development of protagonist Elizabeth Bennet.',
                'published_year' => 1813,
                'genre' => 'Romance',
                'publisher' => 'T. Egerton'
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'isbn' => '9780316769488',
                'price' => 9.99,
                'quantity' => 45,
                'description' => 'Story of Holden Caulfield\'s experiences in New York City in the days following his expulsion from Pencey Prep.',
                'published_year' => 1951,
                'genre' => 'Coming-of-age',
                'publisher' => 'Little, Brown and Company'
            ]
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}