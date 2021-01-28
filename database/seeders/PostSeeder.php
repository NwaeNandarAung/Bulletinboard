<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'id' => '1',
            'title' => 'Title 1',
            'description' => 'Description 1',
            'status' => '1',
            'created_user_id'=>'1',
            'updated_user_id'=>'1',
            'created_at'=>'2021-01-20 03:50:58',
            'updated_at'=> '2021-01-20 03:50:58'
        ]);
    }
}