<?php

namespace App\Http\Controllers;

use App\Models\booksDetail;
use App\Models\chapterBooks;
use Illuminate\Http\Request;

class bookdetail extends Controller
{
    //
    public static function viewbook($id){
        $detail = booksDetail::Where('bookID',$id)->get();
        $chapter=chapterBooks::Where('bookID',$id)->get();
        return view('detail',['details'=>$detail,'chapters'=>$chapter]);
    }
    
}
