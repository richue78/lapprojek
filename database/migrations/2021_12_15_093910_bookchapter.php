<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Bookchapter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapter_books', function (Blueprint $table) {
            $table->id('id')->unsignedBigInteger();
            $table->unsignedBigInteger('bookID');
            $table->string('ChapterName',255);
            $table->text('storyChapter');
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
        Schema::dropIfExists('chapter_books');
    }
}
