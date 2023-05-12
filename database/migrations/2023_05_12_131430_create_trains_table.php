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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();

            $table->string('company');
            $table->string('departure');
            $table->string('arrival');
            $table->dateTime('departure_time');
            $table->dateTime('arrival_time');
            $table->mediumInteger('train_code');
            $table->tinyInteger('train_car_number');
            $table->boolean('on_time');
            $table->boolean('cancelled');

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
        Schema::dropIfExists('trains');
    }
};
