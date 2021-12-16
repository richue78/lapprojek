<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books_details', function (Blueprint $table) {
            $table->id('id')->unsignedBigInteger();
            $table->unsignedBigInteger('bookID');
            $table->string('Author',255);
            $table->string('publisher',255);
            $table->integer('year')->index();
            $table->longText('Description');
            $table->foreign('bookID')->references('id')->on('books')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_details');
    }
}
