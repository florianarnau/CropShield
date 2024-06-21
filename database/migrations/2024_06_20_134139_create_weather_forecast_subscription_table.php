<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherForecastSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_forecast_subscription', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->string('station_id');
            $table->timestamps();

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
        Schema::dropIfExists('weather_forecast_subscription');
    }
}
