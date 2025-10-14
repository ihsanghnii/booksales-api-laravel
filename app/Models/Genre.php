<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genres';

    // private $genres = [
    //     [
    //         'name' => 'Fiction',
    //         'description' => 'A literary work based on the imagination and not necessarly on fact.'
    //     ],
    //     [
    //         'name' => 'Non-Fiction',
    //         'description' => 'A literary work based on facts and real events.'
    //     ],
    //     [
    //         'name' => 'Science Fiction',
    //         'description' => 'A genre thath deals with imaginative and futuristic concepts.'
    //     ],
    //     [
    //         'name' => 'Romance',
    //         'description' => 'A genre that focuses on love and romance.'
    //     ],
    //     [
    //         'name' => 'Adventure ',
    //         'description' => 'A genre featuring exploration, journeys, and excitement.'
    //     ],
    // ];

    // public function getGenres() {
    //     return $this->genres;
    // }
}
