<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class homeview extends Controller
{
    //
    public static function index(){
        $booknext=books::paginate(5);
        return view('Home',['book'=>$booknext]);
    }
}
