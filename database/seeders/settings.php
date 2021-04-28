<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class settings extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'mobile_username' => '09122346757',
            'mobile_password' => 'Dartweb123@456',
            'mobile_senderNumber' => 'blacklist',
            'invoice_sms' => '1',
            'admin_email' => 'dartwebmail@gmail.com',
            'admin_mobilenumber' => '09122346757',
            'logo_address' => '',
            'company_name' => 'respito',
            'compny_address' => 'address',
        ]);
    }
}
