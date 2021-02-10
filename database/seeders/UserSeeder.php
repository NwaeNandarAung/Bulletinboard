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
            'password' => Hash::make('A12345678'),
            'type'=>'1',
            'profile'=>'download.png',
            'created_user_id'=>'1',
            'updated_user_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
    }
}