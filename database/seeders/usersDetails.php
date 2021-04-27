<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

use Illuminate\Database\Seeder;

class usersDetails extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0; $i < 6; $i++){
            $currentDate = rand(1615491111, 1618180285);
            $dateForCreating = Jalalian::forge($currentDate)->format('Y-m-d H:i:s');
            DB::table('users_details')->insert([
                'user_id' => $i + 1,
                'first_address' => Str::random(10),
                'seccond_address' => Str::random(10),
                'seccond_number' => Str::random(10),
                'company_name' => Str::random(10),
                'created_at' => $dateForCreating,
                'updated_at' => $dateForCreating
            ]);
        }
    }
}
