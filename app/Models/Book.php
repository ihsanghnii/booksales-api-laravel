<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // array muldimentional
    private $books = [
        // array asosiatif, key - value
        [
            'title' => 'Pulang',
            'description' => 'petualangan seorang pemuda yang kembali ke desa kelahirannya',
            'price' => 40000,
            'stock' => 15,
            'cover_photo' => 'pulang.jpg',
            'genre_id' => 1,
            'author_id' => 1
        ],
        [
            'title' => 'Sebuah seni untuk bersikap bodo amat',
            'description' => 'Buku yang membahas tentang kehidupan dan filosofi hidup seseorang',
            'price' => 25000,
            'stock' => 5,
            'cover_photo' => 'sebuah_seni.jpg',
            'genre_id' => 2,
            'author_id' => 2
        ],
        [
            'title' => 'naruto',
            'description' => 'Buku yang membahas tentang jalan ninja seseorang',
            'price' =>30000,
            'stock' => 55,
            'cover_photo' => 'naruto.jpg',
            'genre_id' => 3,
            'author_id' => 3
        ]
    ];

    public function getBooks() {
        return $this->books;
    }
}
