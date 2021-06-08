<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use \Morilog\Jalali\Jalalian;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'user_name'    => 'admin',
            'email'        => 'admin@gmail.com',
            'job_title'    => 'Manager',

            'password'     => Hash::make('123456'),    

            'first_name'   => 'admin',
            'last_name'    => 'administrator',
            'address_one'  => 'something',
            'address_two'  => 'something',
            'city'         => 'Tehran',
            'postal_code'  => '123456789',
            'id_number'    => '123456789',
            'phone_number' => rand('09121111111', '09129999999'),
            
            'department_id'   => '1',
            

        ]);

        $names = array(
            "Eva Martin", 
            "Alden Barton", 
            "Brylee Oliver",
            "Niko Guzman",
            "Marley Colon",
            "Fisher Charles",
            "Kyla Rodriguez",
            "Madden Mayo",
            "Sloane Kaufman",
            "Esther Delgado",
            "Anna Costa",
            "Zara Oconnor"
        );
        $addresses = array(
            "299 Tanglewood Road 
            Roselle, IL 60172",
            "6 Glen Creek Street 
            Tallahassee, FL 32303",
            "414 King Street 
            Oxnard, CA 93035",
            "208 Cedar Ave. 
            Garland, TX 75043",
            "9702 Military Ave. 
            Nashville, TN 37205",
            "9133 Wild Rose Rd. 
            Norristown, PA 19401",
            "73 Shub Farm St. 
            Suwanee, GA 30024",
            "7887 Temple Lane 
            Helena, MT 59601",
            "213 Roberts Street 
            Irmo, SC 29063",
            "7117 Mountainview Rd. 
            Park Forest, IL 60466",
            "91 Catherine Street 
            Evansville, IN 47711",
            "8201 North Bridge Avenue 
            Daphne, AL 36526"
        );

        $jobs = array(
            "Budget analyst",
            "Statistician",
            "Environmental scientist",
            "Urban Planner",
            "Microbiologist",
            "Desktop publisher",
            "Construction Manager",
            "Court Reporter",
            "Mathematician",
            "Hairdresser",
            "Writer",
            "Writer"
        );
        for($i =0; $i < 11; $i++){
            $name = explode(' ', $names[$i]);
            DB::table('users')->insert([
                'user_name'    => $name[0] . '_' . $names[1],
                'email'        => $name[0] . '@gmail.com',
                'job_title'    => $jobs[$i],

                'password'     => Hash::make('123456'),    

                'first_name'   => $name[0],
                'last_name'    => $name[1],
                'address_one'  => $addresses[$i],
                'address_two'  => '',
                'city'         => 'USA',
                'postal_code'  => '123456789',
                'phone_number' => rand('09121111111', '09129999999'),
                
                'department_id'   => '2',
            ]);
        }
    }
}
