<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Book;

class BookController extends ApiController
{
    public function index($filter = null){
        try{
            $books = DB::table('books')
            ->select('books.id', 'books.name', 'books.ab', 'categories.id as category_id', 'categories.name as category_name', 'books.chapters')
            ->join('categories', 'books.category', '=', 'categories.id')
            ->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        return $this->successResponse($books);
    }

    public function show($id) {

        try{
            $book = Book::where('id', $id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        if($book){
            return $this->successResponse($book);
        } else {
            return $this->errorResponse('Book not found', 404); 
        }
        
    }

}
