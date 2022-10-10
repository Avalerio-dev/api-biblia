<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WordController;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//////////////    Words
Route::get('/word', [WordController::class, 'index']);
Route::get('/word/{bookNum}', [WordController::class, 'getBook']);
Route::get('/word/{bookNum}/{chNum}', [WordController::class, 'getChapter']);
Route::get('/word/{bookNum}/{chNum}/{verseNum}', [WordController::class, 'find']);

//////////////    Books
Route::get('/book', [BookController::class, 'index']);
Route::get('/book/{id}', [BookController::class, 'show']);