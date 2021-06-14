<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredDevicesTable extends Migration
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
            $table->string('users_id')->index();
            $table->string('devices_id')->index();
            $table->string('color_id')->index();
            $table->string('storage_id')->index();
            $table->string('IMEI');
            $table->string('problems');
            $table->string('device_desc');
            $table->string('device_otherinfo');
            $table->string('condition')->default('open');
            $table->string('device_password')->nullable();
            $table->string('FirstQC')->nullable();
            $table->string('SeccondQC')->nullable();
            $table->date('deadline')->nullable();
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
        Schema::dropIfExists('registered_devices');
    }
}
