<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

class Invoices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $conditions = array("Paid", "Under Process", "Unpaid");
        for($i =1; $i < 36; $i++){
            $currentDate = rand(1615491111, 1618180285);
            $dateForCreating = Jalalian::forge($currentDate)->format('Y-m-d H:i:s');
            DB::table('invoices')->insert([
                'users_id' => rand(2, 5),
                'registered_devices_id' => $i,
                'Price' => rand(1000, 500000),
                'Condition' => $conditions[array_rand($conditions, 1)],
                'Notes' => Str::random(25),
                'created_at' => $dateForCreating,
                'updated_at' => $dateForCreating
            ]);
        }
    }
}
