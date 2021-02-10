<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RegisteredDevices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registered_devices', function (Blueprint $table) {
            $table->id();
            $table->string('userId');
            $table->string('Device');
            $table->string('DeviceType');
            $table->string('DeviceColor');
            $table->string('IMEI');
            $table->string('Problems');
            $table->string('DeviceDescription');
            $table->string('password')->nullable();
            $table->string('DeviceAccessories');
            $table->string('Tips');
            $table->string('MaxBudget');
            $table->string('Condition');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('RegisteredDevices');
    }
}
