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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('note_lecture')->nullable();
            $table->string('note_admin')->nullable();
            $table->text('file')->nullable();
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('dospeng_choice')->nullable();
            $table->integer('lecture_acceptance')->default(0);
            $table->integer('admin_acceptance')->default(0);
            $table->integer('kalab_acceptance')->default(0);
            $table->integer('dosbing_redy')->default(0);
            $table->integer('dospeng_redy')->default(0);
            $table->date('schedule')->nullable();
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
        Schema::dropIfExists('requests');
    }
};
