<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booksDetail extends Model
{
    use HasFactory;
    public function books(){
        return $this->belongsTo(books::class,'bookID','id');
    }
    protected $fillable=[
        'bookID',
        'Author',
        'publisher',
        'year',
        'Description',
        'image'
    ];

}
