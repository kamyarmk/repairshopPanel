<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

class DeviceType extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = array("Mobile", "Laptop", "Tablet");
        for($i =0; $i < 36; $i++){
            $currentDate = rand(1615491111, 1618180285);
            $dateForCreating = Jalalian::forge($currentDate)->format('Y-m-d H:i:s');
            DB::table('devices')->insert([
                'device_name' => Str::random(5),
                'device_type' => $type[array_rand($type, 1)],
                'created_at' => $dateForCreating,
                'updated_at' => $dateForCreating
            ]);
        }
    }
}
