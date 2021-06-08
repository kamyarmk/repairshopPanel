<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            //System Info
            $table->id();
            $table->string('user_name')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('job_title')->nullable();
            $table->string('profile_pic')->nullable();

            //Security Info
            $table->string('password');

            //Personal Info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address_one');
            $table->string('address_two')->nullable();
            $table->string('city');
            $table->string('postal_code')->nullable();
            $table->string('phone_number')->unique();
            $table->string('id_number')->unique()->nullable();
            $table->string('documents')->nullable();

            //Other Info
            $table->string('department_id');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
