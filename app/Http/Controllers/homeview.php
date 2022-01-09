<?php

namespace App\Http\Controllers;

use App\Models\books;
use Illuminate\Http\Request;

class homeview extends Controller
{
    //
    public static function index(){
        $booknext=books::latest();
        if(request('search')){
            $booknext->where('title','like','%' . request('search') . '%');
        }
        return view('Home',['book'=>$booknext->paginate(5)]);
    }

    
    
}
