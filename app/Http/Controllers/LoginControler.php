<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class LoginControler extends Controller
{
    //
    public function index(){
        return view('login',[
            'title'=>'login'
        ]);
    }
    public function autenticate(Request $request){
        $credentials=$request->validate([
            'email'=> ['required','email:dns'],
            'password'=>['required']
        ]);
        if(Auth::attempt($credentials)){
            $request -> session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('loginerror','login gagal');
    }
}
