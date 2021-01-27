<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '2',
            'name' => 'Zwe Yan',
            'email' => 'zweyan@gmail.com',
            'password' => Hash::make('123456'),
            'type'=>'0',
            'profile'=>'https://pixabay.com/photos/tree-sunset-amazing-beautiful-736885/',
            'created_user_id'=>'1',
            'updated_user_id'=>'1',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")
        ]);
    }
}