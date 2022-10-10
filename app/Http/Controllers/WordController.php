<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function getBook($bookNum) {
        try{
            $word = Word::where('bookNum', $bookNum)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        return $this->successResponse($word);
    }

    public function getChapter($bookNum, $chNum) {
        try{
            $word = Word::where('bookNum', $bookNum)->where('chNum', $chNum)->get();
        } catch (\Exception $e) {
            return $this->errorResponse('Database Error', $e);
        }
        return $this->successResponse($word);
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
