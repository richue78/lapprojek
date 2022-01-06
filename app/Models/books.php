<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
    public function details(){
        return $this->hasOne(booksDetail::class,'bookID','id');
    }
    public function chapterbooks(){
        return $this->hasMany(chapterBooks::class,'bookID','id');
    }
    protected $fillable = [

        'title'
    ];
}
