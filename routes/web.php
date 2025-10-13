<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/books', function () {
//     return view('books');
// });

// Route::get('/genres', function () {
//     return view('genres');
// });

Route::get('/books', [BookController::class, 'index']);
Route::get('/genres', [GenreController::class, 'index']);