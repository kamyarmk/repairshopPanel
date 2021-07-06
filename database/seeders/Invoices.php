<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;
use Carbon\Carbon;

class Invoices extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $invoiceCon = array(
           'Waiting',
           'Ready',
           'Paid',
           'Over'
        );
        for($i =1; $i < 60; $i++){
            $currentDate = rand(Carbon::now()->getTimestamp(), Carbon::now()->subWeek(4)->getTimestamp());
            DB::table('invoices')->insert([
                //TODO: Remove the User_id
                'users_id' => rand(2, 5),
                'registered_devices_id' => $i,
                'Price' => rand(1000, 500000),
                'Condition' => $invoiceCon[rand(0,3)],
                'Notes' => Str::random(25),
                'created_at' => $currentDate,
                'updated_at' => $currentDate
            ]);
        }
        for($i =1; $i < 30; $i++){
            $currentDate = rand(Carbon::now()->getTimestamp(), Carbon::now()->subWeek(1)->getTimestamp());
            DB::table('invoices')->insert([
                //TODO: Remove the User_id
                'users_id' => rand(2, 5),
                'registered_devices_id' => $i,
                'Price' => rand(1000, 500000),
                'Condition' => $invoiceCon[rand(0,3)],
                'Notes' => Str::random(25),
                'created_at' => $currentDate,
                'updated_at' => $currentDate
            ]);
        }
    }
}
