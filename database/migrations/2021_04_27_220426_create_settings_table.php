<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('mobile_username');
            $table->string('mobile_password');
            $table->string('mobile_senderNumber');
            $table->string('invoice_sms');
            $table->string('admin_email');
            $table->string('admin_mobilenumber');
            $table->string('logo_address');
            $table->string('company_name');
            $table->string('compny_address');
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
        Schema::dropIfExists('settings');
    }
}
