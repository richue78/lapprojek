<?php

namespace App\Http\Controllers;

use App\Models\chapterBooks;
use Illuminate\Http\Request;

class chapterView extends Controller
{
    //
    public static function viewchapter($id){
        $view=chapterBooks::where('id', $id )->get();
        return view('chapterview',['view'=>$view]);
    }
}
