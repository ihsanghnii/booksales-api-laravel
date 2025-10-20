<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:api');

// book controller dengan method index dan show bisa diakses tanpa login
Route::apiResource('/books', BookController::class)->only(['index', 'show']);
Route::apiResource('/authors', AuthorController::class)->only(['index', 'show']);
Route::apiResource('/genres', GenreController::class)->only(['index', 'show']);

// controller dengan method store, update, dan destroy cuma bisa diakses setelah login
Route::middleware(['auth:api'])->group(function () {

    Route::middleware(['role:admin'])->group(function () {
        Route::apiResource('/books', BookController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/authors', BookController::class)->only(['store', 'update', 'destroy']);
        Route::apiResource('/genres', BookController::class)->only(['store', 'update', 'destroy']);
    });

});
