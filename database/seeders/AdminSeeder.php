<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'Nwae',
            'email' => 'nwaenwae@gmail.com',
            'password' => Hash::make('A12345678'),
            'type'=>'0',
            'profile'=>'download.png',
            'created_user_id'=>'1',
            'updated_user_id'=>'1',
            'created_at'=> now(),
            'updated_at'=> now()
        ]);
    }
}