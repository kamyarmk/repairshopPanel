<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tasks extends Seeder
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
            'Fix Glass',
            'Fix WIFI',
            'Fix Cover',
            'Fix Battery Problem',
            'Fix Software Problem'
        );

        for($i =0; $i < 30; $i++){
            $currentDate = rand(1619292276, 1619551476);
            DB::table('tasks')->insert([
                'registered_devices_id' => rand(1, 5),
                'name' => $problems[rand(0,4)],
                'condition' => rand(0,1),
            ]);
        }
    }
}
