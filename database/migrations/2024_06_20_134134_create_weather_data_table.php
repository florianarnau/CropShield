<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->id();
            $table->dateTime('timestamp');
            $table->decimal('value');
            $table->unsignedBigInteger('sensor_id');
            $table->unsignedBigInteger('station_id');
            $table->timestamps();

            $table->foreign('sensor_id')->references('id')->on('sensor')->onDelete('cascade');
            $table->foreign('station_id')->references('id')->on('weather_station')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_data');
    }
}
