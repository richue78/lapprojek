<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapterBooks extends Model
{
    use HasFactory;
    public function books(){
        return $this->belongsTo(book::class,'bookID','id');
    }
    protected $fillable=[
        'bookID',
        'ChapterName',
        'storyChapter',
        
    ];

}
