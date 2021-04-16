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
            'department_level' => '1',
            'created_at' => $dateForCreating,
            'updated_at' => $dateForCreating
        ]);
        DB::table('departments')->insert([
            'department_name' => 'customers',
            'department_level' => '2',
            'created_at' => $dateForCreating,
            'updated_at' => $dateForCreating
        ]);
    }
}
