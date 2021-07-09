<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type');
            $table->integer('phone')->index();
            $table->string('profile_photo')->nullable();
            $table->string('address')->nullable();
            $table->integer('blood_group_id')->nullable();
            $table->integer('areas_id')->nullable();
            $table->integer('donation_count')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0 Pending And confirmed');
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
