<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends ApiController
{
    public function index(Request $request, $filter = null){
        return DB::table('books')
        ->select('books.id', 'books.name', 'books.ab', 'categories.id as category_id', 'categories.name as category_name', 'books.chapters')
        ->join('categories', 'books.category', '=', 'categories.id')
        ->get();
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

    public function getChapter($bookNum, $chNum) {
        try{
            $verses = DB::table('words')
            ->select('verseNum')
            ->where('bookNum', $bookNum)
            ->where('chNum', $chNum)
            ->get();
            //$word = Word::where('bookNum', $bookNum)->where('chNum', $chNum)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        return $this->successResponse($verses);
    }
}
