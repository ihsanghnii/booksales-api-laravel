<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);

        // $data = new Genre(); //membuat object
        // $genres = $data->getGenres(); //mengakses method getgenres

        // return view('genres', ['genres' => $genres]); // mengirim data buku ke view
    }
}
