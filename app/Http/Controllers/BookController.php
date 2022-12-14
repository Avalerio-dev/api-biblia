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

    public function find($book_id, $chapter_id, $verse_id) {
        try{
            $word = Word::where('book_id', $book_id)->where('chapter_id', $chapter_id)->where('verse_id', $verse_id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        return $this->successResponse($word);
    }

    public function getChapter($book_id, $chapter_id) {
        try{
            $verses = DB::table('words')
            ->select('verse_id')
            ->where('book_id', $book_id)
            ->where('chapter_id', $chapter_id)
            ->get();
            //$word = Word::where('book_id', $book_id)->where('chapter_id', $chapter_id)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        return $this->successResponse($verses);
    }
}
