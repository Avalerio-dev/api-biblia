<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;
    protected $table = 'words';
    protected $fillable = [
        'wordId',
        'word',
        'book_id',
        'chapter_id',
        'verse_id',
    ];
}
