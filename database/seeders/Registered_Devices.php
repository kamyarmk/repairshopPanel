<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

class Registered_Devices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = array("Open", "Delivered", "Refund");
        $problems = array(
            'Broken Glass',
            'WIFI Problem',
            'Broken Cover',
            'Battery Problem',
            'Software Problem'
        );

        for($i =0; $i < 5; $i++){
            $currentDate = rand(1619292276, 1619551476);
            DB::table('registered_devices')->insert([
                'users_id' => rand(2, 5),
                'devices_id' => rand(1,5),
                'color_id' => rand(1,17),
                'storage_id' => rand(1,6),
                'IMEI' => Str::random(25),
                'problems' => $problems[rand(0,4)],
                'device_desc' => Str::random(3),
                'device_otherinfo' => Str::random(25),
                'condition' => $conditions[array_rand($conditions, 1)],
                'device_password' => Str::random(10),
                'deadline' => $currentDate,
                'created_at' => $currentDate,
                'updated_at' => $currentDate
            ]);
        }
    }
}
