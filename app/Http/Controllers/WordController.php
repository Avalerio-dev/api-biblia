<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Word;

class WordController extends ApiController
{
    public function index($filter = null){
        try{
            $words = Word::all();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }        
        return $this->successResponse($words);
    }

    public function show($id) {

        try{
            $word = Word::where('id', $id)->first();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', 500);
        }
        if(!$word->isEmpty()){
            return $this->successResponse($word);
        } else {
            return $this->errorResponse('Word not found', 404); 
        }
        
    }

    public function getBookWords($book_id) {
        try{
            $words = Word::where('book_id', $book_id)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        if(!$words->isEmpty()){
            return $this->successResponse($words);
        } else {
            return $this->errorResponse('Book not found', 404); 
        }
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

    public function getChapter($book_id, $chapter_id) {
        try{
            $verses = Word::
            select('verse_id', 'word')
            ->where('book_id', $book_id)
            ->where('chapter_id', $chapter_id)
            ->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        if(!$verses->isEmpty()){
            return $this->successResponse($verses);
        } else {
            return $this->errorResponse('Book not found', 404); 
        }
    }

    

    public function getVersesNumber($book_id, $chapter_id) {
        try{
            $verses = Word::where('book_id', $book_id)
            ->where('chapter_id', $chapter_id)
            ->count();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        if($verses){
            return $this->successResponse($verses);
        } else {
            return $this->errorResponse('Book not found', 404); 
        }
    }

    public function search($query) {
        try{
             $words = Word::where('word', 'like', '%' . $query . '%')->get(); 
        } catch (\Exception $e) {
            return $this->$e;
            return $this->errorResponse('Database Error', 500);
        }
        if(!$words->isEmpty()){
            return $this->successResponse($words);
        } else {
            return $this->errorResponse('Word not found', 404); 
        }
    }
}
