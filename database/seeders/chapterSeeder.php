<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chapterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('chapter_books')->insert([
            ['id'=>1,'bookID'=>1,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini baka to test cpater 1'], 
            ['id'=>2,'bookID'=>1,'ChapterName'=>'Vol1 Chapter 2','storyChapter'=>'ini baka to test cpater 2'],
            ['id'=>3,'bookID'=>2,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini 86 cpater 1'],
            ['id'=>4,'bookID'=>2,'ChapterName'=>'Vol1 Chapter 2','storyChapter'=>'ini 86 cpater 2'],
            ['id'=>5,'bookID'=>3,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini solo cpater 1'],
            ['id'=>6,'bookID'=>3,'ChapterName'=>'Vol1 Chapter 2','storyChapter'=>'ini solo cpater 2'],
            ['id'=>7,'bookID'=>4,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini smahouyko cpater 1'],
            ['id'=>8,'bookID'=>4,'ChapterName'=>'Vol1 Chapter 2','storyChapter'=>'ini smahouko cpater 2'],
            ['id'=>9,'bookID'=>5,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini asterick cpater 1'],
            ['id'=>10,'bookID'=>5,'ChapterName'=>'Vol1 Chapter2','storyChapter'=>'ini asteric cpater 2'],
        ]);
    }
}
