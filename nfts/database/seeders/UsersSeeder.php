<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Administrador 1',
            'email'=> 'admin@gmail.com',
            'passwork'=> Hash::make('123'),
            'phone' => '6361205968',
            'alias' => 'admin',
            'image'=> 'default.jpg'
        ]);
        DB::table('users')->insert([
            'name' => 'Benito Juarez',
            'email'=> 'beni04@gmail.com',
            'passwork'=> Hash::make('123'),
            'phone' => '6361205968',
            'alias' => 'beni',
            'image'=> 'default.jpg'
        ]);
    }
}
