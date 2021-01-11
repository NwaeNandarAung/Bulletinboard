<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

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
            'name' => 'Nwae',
            'email' => 'nwaenwae@gmail.com',
            'password' => bcrypt('123456'),
            'profile'=>'https://pixabay.com/photos/tree-sunset-amazing-beautiful-736885/',
            'create_user_id'=>'1',
            'update_user_id'=>'1',
            'created_at'=> date("Y-m-d H:i:s"),
            'updated_at'=> date("Y-m-d H:i:s")

        ]);

    }
}
