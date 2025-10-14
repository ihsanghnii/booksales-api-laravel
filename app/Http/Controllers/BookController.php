<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        // $books = Book::with([
        //     'author',
        //     'genre'
        // ])->get();

        // $data = new Book();
        // $books = $data->getBooks();

        return view('books', ['books' => $books]);
    }
}
