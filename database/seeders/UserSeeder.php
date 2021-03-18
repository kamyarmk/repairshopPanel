<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone_number' => rand('09121111111', '09129999999'),
            'password' => Hash::make('123456'),
        ]);
        for($i =0; $i < 6; $i++){
            DB::table('users')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'phone_number' => rand('09121111111', '09129999999'),
                'password' => Hash::make('password'),
            ]);
        }
    }
}
