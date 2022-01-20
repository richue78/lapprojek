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
            ['id'=>1,'bookID'=>1,'ChapterName'=>'Vol1 Chapter 1','storyChapter'=>'ini baka to test cpater 1
            The protagonist is a guy who is among the stupidest of the stupidest in the school. In this school, your grades can be over the score of 100. 
            If you leave an examination partway, you get a score of zero. A bright and cute girl, Himeji Mizuki, had a high fever during the examination. Despite her potential to be the second-highest scorer in her year, she obtained a zero for having left due to her illness and is thus allocated to the worst class, Class F.
            Grades mean almost everything. Class A, taught by a smart-looking teacher, uses a plasma TV the size of an entire wall as their blackboard, personal laptops, personal air conditioners, refrigerators, adjustable seats, and all kinds of different appliances. 
            Within the refrigerator are all kinds of drinks and snacks. Their ceiling is made of glass, and the walls allow them to hang up high-class drawings and plants.
            As for Class F, the worst class... they have Japanese desks and seat paddings. Their blackboard is filthy and even lacks chalk! When someone complains that the leggings of his desk is broken,'], 
            ['id'=>2,'bookID'=>1,'ChapterName'=>'Vol1 Chapter 2','storyChapter'=>'ini baka to test cpater 2
            The protagonist is a guy who is among the stupidest of the stupidest in the school. In this school, your grades can be over the score of 100. 
            If you leave an examination partway, you get a score of zero. A bright and cute girl, Himeji Mizuki, had a high fever during the examination. Despite her potential to be the second-highest scorer in her year, she obtained a zero for having left due to her illness and is thus allocated to the worst class, Class F.
            Grades mean almost everything. Class A, taught by a smart-looking teacher, uses a plasma TV the size of an entire wall as their blackboard, personal laptops, personal air conditioners, refrigerators, adjustable seats, and all kinds of different appliances. 
            Within the refrigerator are all kinds of drinks and snacks. Their ceiling is made of glass, and the walls allow them to hang up high-class drawings and plants.
            As for Class F, the worst class... they have Japanese desks and seat paddings. Their blackboard is filthy and even lacks chalk! When someone complains that the leggings of his desk is broken,'],
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
