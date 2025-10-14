<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rouling',
            'photo' => 'jk_rouling.jpg',
            'bio' => 'British author, best known for the Herry Potter series'
        ]);

        Author::create([
            'name' => 'George R.R. Martin',
            'photo' => 'george_rr_martin.jpg',
            'bio' => 'American movelist and short story writter, known for A song of ice and fire.'
        ]);

        Author::create([
            'name' => 'Isaac Asimov',
            'photo' => 'isaac_asimov.jpg',
            'bio' => 'American author and professor of blochemistry, known for his works in science fiction.'
        ]);

        Author::create([
            'name' => 'Stephen King',
            'photo' => 'stephen_king.jpg',
            'bio' => 'American author of horror, supernatural fiction, suspense, and fantasy novels.'
        ]);

        Author::create([
            'name' => 'Suzanne Collins',
            'photo' => 'suzanne_collins.jpg',
            'bio' => 'American author, best known for The Hunger Games trilogy.'
        ]);
    }
}
