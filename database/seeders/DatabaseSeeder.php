<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(Department::class);
        $this->call(UserSeeder::class);
        $this->call(DeviceType::class);
        $this->call(colors::class);
        $this->call(storages::class);
        $this->call(Registered_Devices::class);
        $this->call(tasks::class);
        $this->call(Invoices::class);
        $this->call(Devcvice_Config::class);
        $this->call(usersDetails::class);
        $this->call(settings::class);
    }
}
