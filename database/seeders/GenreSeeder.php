<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'name' => 'Fiction',
            'description' => 'A literary work based on the imagination and not necessarly on fact.'
        ]);

        Genre::create([
            'name' => 'Non-Fiction',
            'description' => 'A literary work based on facts and real events.'
        ]);

        Genre::create([
            'name' => 'Science Fiction',
            'description' => 'Genre yang mengangkat konsep-konsep imajinatif dan futuristik.'
        ]);

        Genre::create([
            'name' => 'Romance',
            'description' => 'Genre yang menekankan pada hubungan romantis dan cinta.'
        ]);

        Genre::create([
            'name' => 'Adventure',
            'description' => 'Genre yang menampilkan penjelajahan dan petualangan'
        ]);
    }
}
