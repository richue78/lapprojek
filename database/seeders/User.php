<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            ['id'=>1,'name'=>'admin','username'=>'adminLN','email'=>'admin@admin.com','password'=>Hash::make('password')],
            ['id'=>2,'name'=>'Reader','username'=>'ReaderOn','email'=>'user@user.com','password'=>Hash::make('qwerty12345')]
        ]);
    }
}
