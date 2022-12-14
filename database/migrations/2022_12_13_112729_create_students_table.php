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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('previous_degree');
            $table->string('highest_education')->nullable();
            $table->string('origin_address')->nullable();
            $table->string('level')->nullable();
            $table->string('laboratorium')->nullable();
            $table->date('entry_date')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('student_type')->nullable();
            $table->string('student_status')->nullable();
            $table->string('parent_address')->nullable();
            $table->string('parent_phone')->nullable();
            $table->string('alternate_email_address')->nullable();
            $table->string('facebook_address')->nullable();
            $table->string('instagram_address')->nullable();
            $table->string('twitter_address')->nullable();
            $table->string('whatsapp_address')->nullable();
            $table->string('student_role')->nullable();
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
        Schema::dropIfExists('students');
    }
};
