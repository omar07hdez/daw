<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category'=>'Art',
            'img'=>'default.jpg'
        ]);
        DB::table('categories')->insert([
            'category'=>'Music',
            'img'=>'default.jpg'
        ]);
        DB::table('categories')->insert([
            'category'=>'Photography',
            'img'=>'default.jpg'
        ]);
        DB::table('categories')->insert([
            'category'=>'Deportes',
            'img'=>'default.jpg'
        ]);
    }
}
