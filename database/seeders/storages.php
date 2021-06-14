<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class storages extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storages = array(
            '64 GB',
            '128 GB',
            '256 GB',
            '512 GB',
            '1 TB',
            '2 TB',
        );
        
        for($i =0; $i < 6; $i++){        
            DB::table('Storages')->insert([
                'name'    => $storages[$i],
            ]);
        }
    }
}
