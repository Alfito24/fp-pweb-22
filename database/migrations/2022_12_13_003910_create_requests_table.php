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
            $table->string('file');
            $table->foreignId('student_id');
            $table->foreignId('lecture_id')->nullable();
            $table->foreign('lecture_id')->references('id')->on('lectures')->onDelete('cascade');
            $table->foreignId('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('staffs')->onDelete(('cascade'));
            $table->boolean('lecture_acceptance')->default(false);
            $table->boolean('admin_acceptance')->default(false);
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
