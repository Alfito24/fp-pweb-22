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
        Schema::create('lectures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('country');
            $table->string('marital_status');
            $table->string('position');
            $table->string('rank');
            $table->string('class');
            $table->string('functional');
            $table->integer('nidn')->unique();
            $table->string('highest_education');
            $table->string('before_name_title');
            $table->string('after_name_title');
            $table->string('laboratorium');
            $table->string('lecture_status');
            $table->string('lecture_role');
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
        Schema::dropIfExists('lectures');
    }
};
