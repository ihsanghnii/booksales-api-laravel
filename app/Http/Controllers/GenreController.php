<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();

        if ($genres->isEmpty()) {
            return response()->json([
                "success" => true,
                "message" => "Resource data not found"
            ]);
        }

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $genres
        ], 200);

        // $data = new Genre(); //membuat object
        // $genres = $data->getGenres(); //mengakses method getgenres

        // return view('genres', ['genres' => $genres]); // mengirim data buku ke view
    }

    public function store(Request $request) {
        // validator
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'description' => 'required|string'
        ]);

        // check validator error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 422);
        }

        // insert data
        $genre = Genre::create([
            'name' => $request->name,
            'description' => $request->description
        ]);

        // response
        return response()->json([
            'success' => true,
            'message' => 'Resource added successfully',
            'data' => $genre
        ], 201);
    }
}
