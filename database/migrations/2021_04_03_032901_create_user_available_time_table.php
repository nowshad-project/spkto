<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAvailableTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_available_time', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->time('sat');
            $table->time('sun');
            $table->time('mon');
            $table->time('tue');
            $table->time('wed');
            $table->time('thu');
            $table->time('fri');
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
        Schema::dropIfExists('user_available_time');
    }
}
