<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use \Morilog\Jalali\Jalalian;

class Department extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateForCreating = Jalalian::forge('now')->format('Y-m-d H:i:s');
        DB::table('departments')->insert([
            'department_name' => 'administrator',
            'department_symbol' => 'ADM',
            'department_level' => '1',
            'created_at' => $dateForCreating,
            'updated_at' => $dateForCreating
        ]);
        DB::table('departments')->insert([
            'department_name' => 'customers',
            'department_symbol' => 'CTM',
            'department_level' => '2',
            'created_at' => $dateForCreating,
            'updated_at' => $dateForCreating
        ]);

        $jobs = array(
            "Acounting|AC",
            "Repair Man|RM",
            "Receptionist|RC"
        );
        for($i =0; $i < 3; $i++){
            $job = explode('|', $jobs[$i]);
            DB::table('departments')->insert([
                'department_name' => $job[0],
                'department_symbol' => $job[1],
                'department_level' => $i + 2,
            ]);
        }
    }
}
