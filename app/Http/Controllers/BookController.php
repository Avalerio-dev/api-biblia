<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Book;

class BookController extends ApiController
{
    public function index(Request $request, $filter = null){
        $books = Book::all();

        return $this->successResponse($books);
    }

    public function show($id) {

        try{
            $book = Book::where('id', $id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        return $this->successResponse($book);
        
    }

    public function find($bookNum, $chNum, $verseNum) {
        try{
            $word = Word::where('bookNum', $bookNum)->where('chNum', $chNum)->where('verseNum', $verseNum)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        return $this->successResponse($word);
    }
}
