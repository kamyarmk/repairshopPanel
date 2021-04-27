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
        for($i =0; $i < 5; $i++){
            $currentDate = rand(1619292276, 1619551476);
            $dateForCreating = Jalalian::forge(1619292276)->format('Y-m-d H:i:s');
            DB::table('registered_devices')->insert([
                'user_id' => rand(2, 5),
                'devices_id' => rand(1,20),
                'DeviceType' => Str::random(5),
                'DeviceColor' => Str::random(3),
                'IMEI' => Str::random(15),
                'Problems' => Str::random(25),
                'DeviceDescription' => Str::random(25),
                'password' => Str::random(3),
                'DeviceAccessories' => Str::random(25),
                'Tips' => Str::random(25),
                'FirstQC' => Str::random(10),
                'SeccondQC' => Str::random(10),
                'MaxBudget' => rand(1000, 50000),
                'Condition' => $conditions[array_rand($conditions, 1)],
                'created_at' => $dateForCreating,
                'updated_at' => $dateForCreating
            ]);
        }
    }
}
