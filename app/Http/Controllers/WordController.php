<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Word;

class WordController extends ApiController
{
    public function index(Request $request, $filter = null){
        $words = Word::all();

        return $this->successResponse($words);
    }

    public function show($id) {

        try{
            $word = Word::where('id', $id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        return $this->successResponse($word);
        
    }

    public function getBook($book_id) {
        try{
            $word = Word::where('book_id', $book_id)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        return $this->successResponse($word);
    }



    public function find($book_id, $chapter_id, $verse_id) {
        try{
            $word = Word::where('book_id', $book_id)->where('chapter_id', $chapter_id)->where('verse_id', $verse_id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        if($word){
            return $this->successResponse($word);
        } else {
            return $this->errorResponse('Word not found', 404); 
        }
    }
}
