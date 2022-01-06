<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bookDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books_details')->insert([
            ['id'=>1,'bookID'=>1,'Author'=>'Kenji Inoue','publisher'=>'Enterbrain','year'=>'2007','Description'=>'The protagonist is a guy who is among the stupidest of the stupidest in the school. In this school, your grades can be over the score of 100. 
            If you leave an examination partway, you get a score of zero. A bright and cute girl, Himeji Mizuki, had a high fever during the examination. Despite her potential to be the second-highest scorer in her year, she obtained a zero for having left due to her illness and is thus allocated to the worst class, Class F.
            Grades mean almost everything. Class A, taught by a smart-looking teacher, uses a plasma TV the size of an entire wall as their blackboard, personal laptops, personal air conditioners, refrigerators, adjustable seats, and all kinds of different appliances. 
            Within the refrigerator are all kinds of drinks and snacks. Their ceiling is made of glass, and the walls allow them to hang up high-class drawings and plants.
            As for Class F, the worst class... they have Japanese desks and seat paddings. Their blackboard is filthy and even lacks chalk! When someone complains that the leggings of his desk is broken,','image'=>'BakaTestV1cover.jpg'],
            ['id'=>2,'bookID'=>2,'Author'=>'Asato Asato','publisher'=>' ASCII Media Works','year'=>'2017','Description'=>'The Republic of San Magnolia has been at war with the Empire of Giad for nine years. 
            Though it initially suffered devastating losses to the Empires autonomous mechanized Legions, The Republic has since developed its own autonomous units, called Juggernauts, which are directed remotely by a Handler. 
            While on the surface the public believes the war is being fought between machines, in reality, the Juggernauts are being piloted by humans, all of whom are 86—the designation given to the Colorata minority of San Magnolia. 
            The 86 originally had equal rights, but were persecuted and scapegoated by the dominant Alba race and the Alba-supremacist Republic government to the point where Colorata were both officially designated and popularly considered subhuman. 
            The 86 were not permitted to have personal names and were immured in internment camps in the 86th Districttheir namesakeall the while being forced to fight in the Republics war with the Empire to receive better treatment.','image'=>'86-eighty-six-vol-3-light-novel.jpg'],
            ['id'=>3,'bookID'=>3,'Author'=>'Chu-Gong','publisher'=>'Papyrus','year'=>'2014','Description'=>'In a world where hunters, humans who possess magical abilities, must battle deadly monsters to protect the human race from certain annihilation, a notoriously weak hunter named Sung Jinwoo finds himself in a seemingly endless struggle for survival. One day, after narrowly surviving an overwhelmingly powerful double dungeon that nearly wipes out his entire party, a mysterious program called the System chooses him as its sole player and in turn, gives him the extremely rare ability to level up in strength, possibly beyond any known limits. Follow Jinwoos journey as he fights against all kinds of enemies, both man and monster, to discover the secrets of the dungeons and the true source of his powers. ','image'=>'sololeveling.jpg'],
            ['id'=>4,'bookID'=>4,'Author'=>'Sato Tsutomu','publisher'=>'Dengeki Bunko Light Novel','year'=>'2011','Description'=>'The story follows Tatsuya Shiba, a bodyguard to his sister Miyuki Shiba who is also a candidate to succeed the leadership of the Yotsuba clan, one of the Ten Master Clans that govern Japan magicians. They enroll into First High School which segregates its students based on their magical abilities. Miyuki is enrolled as a first course student and is viewed as one of the best students, while Tatsuya is in the second course and considered to be magically inept. However, Tatsuya technical knowledge, combat abilities, and unique magic techniques cause people to view him as an irregular to the schools standardized rankings. ','image'=>'mahoukakoko.jpg'],
            ['id'=>5,'bookID'=>5,'Author'=>'Yū Miyazaki','publisher'=>'	Media Factory','year'=>'2012','Description'=>'n the 21st century, Earth is in a rapidly declining economic state as megacorporations known as the Integrated Enterprise Foundations (統合企業財体, Tōgō Kigyō Zaitai), rose to power after the Invertia (落星雨, Inverutia)[a] impact event destroyed most of the planets cities and resulted in humans gaining superpowers to become the Genestella (星脈世代, Jenesutera).[b] The city of Rikka (六花), also called Asterisk, has six academies where the Genestella participate in tournaments called Festas (星武祭, Fesuta).[c] Battle performances at Seidoukan Academy (星導館学園, Seidōkan Gakuen), the citys fifth top-ranking academy, are falling significantly and the academys incumbent student council president, Claudia Enfield, is determined to find a solution to the problem. Kirin Toudou is the academys top fighter, but Claudia, as well as Lieseltanian princess, Julis-Alexia von Riessfeld, are close behind.Meanwhile, Ayato Amagiri investigates the disappearance of his sister, Haruka, a former student at Seidoukan. During his first day at the academy, Ayato is forced to fight Julis after discovering her half-dressed when returning her handkerchief to her. Claudia voids their duel and enrolls Ayato in Seidoukan. After rescuing Julis from a plot to cripple the Phoenix Festa, he sets out to become her protector and close friend. Eventually, Ayato wins against Kirin and is named the new top student at the academy. After Ayato participates in the Phoenix Festa with Julis to solve Seidoukans performance crisis, they continue to participate in various Festas and also fight threats outside of the academy. ','image'=>'gakusentoshi.jpg']
        ]);
    }
}
