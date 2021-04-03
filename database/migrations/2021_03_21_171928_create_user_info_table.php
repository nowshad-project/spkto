<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_info', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unique();
            $table->string('language');
            $table->string('gender');
            $table->date('dob');
            $table->string('country');
            $table->longtext('topic_to_dis');

            $table->integer('rec_payment')->default('0');

            $table->double('hourly_rate')->nullable();
            $table->longtext('available_dates')->nullable();
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
        Schema::dropIfExists('user_info');
    }
}
