<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'J.K. Rouling',
            'photo' => 'jk_rouling.jpg',
            'bio' => 'British author, best known for the Herry Potter series'
        ],
        [
            'name' => 'George R.R. Martin',
            'photo' => 'george_rr_martin.jpg',
            'bio' => 'American movelist and short story writter, known for A song of ice and fire.'
        ],
        [
            'name' => 'Isaac Asimov',
            'photo' => 'isaac_asimov.jpg',
            'bio' => 'American author and professor of blochemistry, known for his works in science fiction.'
        ],
        [
            'name' => 'Stephen King',
            'photo' => 'stephen_king.jpg',
            'bio' => 'American author of horror, supernatural fiction, suspense, and fantasy novels.'
        ],
        [
            'name' => 'Harper Lee',
            'photo' => 'harper_lee.jpg',
            'bio' => 'American novelist, best known for To Kill a Mockingbird.'
        ]
    ];

    public function getAuthors() {
        return $this->authors;
    }
}
