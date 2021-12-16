<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class RegisterControler extends Controller
{
    //
    public function index(){
        return view('Register',[
            'title'=>'Register'
        ]);
    }

    public function store(Request $request){
       $validatedData=$request->validate([
        'name'=>['required','min:4','max:14'],
        'username'=>['required','min:3','max:14','unique:users'],
        'email' => ['required','email','unique:users'],
        'password'=>['required','confirmed','min:5','max:255']
       ]);
    //    $validatedData['password']=bcrypt($validatedData['password']);
       $validatedData['password']=Hash::make( $validatedData['password']);
       User::create($validatedData);
       $request->session()->flash('success','registrasi udah selesai');
       return redirect('/login');
    }
}
