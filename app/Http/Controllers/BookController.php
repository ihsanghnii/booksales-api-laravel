<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return response()->json([
            "success" => true,
            "message" => "Get all resources",
            "data" => $books
        ], 200);

        // return view('books', ['books' => $books]);

        // $books = Book::with([
        //     'author',
        //     'genre'
        // ])->get();

        // $data = new Book();
        // $books = $data->getBooks();
    }
}
