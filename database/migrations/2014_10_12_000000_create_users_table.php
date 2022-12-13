<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique();
            $table->integer('phone_number')->unique();
            $table->date('birth_date')->nullable();
            $table->string('place_of_birth')->nullable();
            $table->text('photo')->nullable();
            $table->integer('nik')->unique();
            $table->integer('registration_number')->unique();
            $table->integer('group_id')->nullable();
            $table->string('sex')->nullable();
            $table->string('religion')->nullable();
            $table->string('blood_type')->nullable();
            $table->string('address')->nullable();
            $table->boolean('isStudent')->default(False);
            $table->boolean('isLecture')->default(False);
            $table->boolean('isAdmin')->default(False);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
};
