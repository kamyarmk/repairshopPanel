<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class colors extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colors = array(
            'Pink',
            'Crimson',
            'Red',
            'Maroon',
            'Brown',
            'Misty Rose',
            'Salmon',
            'Coral',
            'Orange-Red',
            'Chocolate',
            'Gold',
            'Ivory',
            'Yellow',
            'Olive',
            'Yellow-Green',
            'Lawn green',
            'Chartreuse'
        );
        
        for($i =0; $i < 17; $i++){        
            DB::table('Colors')->insert([
                'name'    => $colors[$i],
            ]);
        }
    }
}
