<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWeatherStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weather_station', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('latitude', 18, 15);
            $table->decimal('longitude', 18, 15);
            $table->decimal('altitude', 18, 15);
            $table->string('city');
            $table->string('department');
            $table->boolean('isActive');
            $table->unsignedBigInteger('recorder_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->timestamps();

            $table->foreign('recorder_id')->references('id')->on('recorders')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('weather_station');
    }
}
