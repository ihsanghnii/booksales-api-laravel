<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Pulang',
            'description' => 'petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ]);

        Book::create([
            'title' => 'Sebuah seni untuk bersikap bodo amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang',
            'price' => 30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]);

        Book::create([
            'title' => 'The Lord of the Rings',
            'description' => 'A classic fantasy novel by J.R.R. Tolkien.',
            'price' => 60000,
            'stock' => 30,
            'cover_photo' => 'the_lord_of_the_rings.jpg',
            'genre_id' => 1,
            'author_id' => 2
        ]);

        Book::create([
            'title' => 'The Hunger Games',
            'description' => 'A dystopian novel by Suzanne Collins featuring survival and rebellion.',
            'price' => 65000,
            'stock' => 28,
            'cover_photo' => 'the_hunger_games.jpg',
            'genre_id' => 1,
            'author_id' => 5
        ]);
    }
}
