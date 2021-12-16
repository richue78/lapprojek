<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            ['id'=>1,'title'=>'BakaToTest to Shokanju ni'],
            ['id'=>2,'title'=>'86:EightySix'],
            ['id'=>3,'title'=>'SoloLeveling'],
            ['id'=>4,'title'=>'Mahouka kouko no rotosei'],
            ['id'=>5,'title'=>'Gakusen toshi asterisk']
        ]);
    }
}
