<?php

use App\Http\Controllers\bookdetail;
use App\Http\Controllers\chapterView;
use App\Http\Controllers\homeview;
use App\Http\Controllers\LoginControler;
use App\Http\Controllers\RegisterControler;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[homeview::class,'index']);

route::get('/detail/{id}',[bookdetail::class,'viewbook']);
route::get('/chapterview/{id}',[chapterView::class,'viewchapter']);

Route::get('/login',[LoginControler::class,'index']);
Route::post('/login',[LoginControler::class,'autenticate']);

Route::get('/About', function () {
    return view('About',[
        "title"=>"About",
        "image"=>"index.png"
    ]);
});


Route::get('/register',[RegisterControler::class,'index']);
Route::post('/register',[RegisterControler::class,'store']);
