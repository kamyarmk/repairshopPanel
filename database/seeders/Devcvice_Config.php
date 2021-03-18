<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Devcvice_Config extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i =0; $i < 20; $i++){
            DB::table('device__configs')->insert([
                'devices_id' => '1',
                'name' => Str::random(3),
                'type' => 'checkbox',
            ]);
        }
    }
}
