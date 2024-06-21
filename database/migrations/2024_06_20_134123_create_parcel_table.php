<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParcelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parcel', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('latitude');
            $table->decimal('longitude');
            $table->decimal('surface_ha');
            $table->decimal('perimeters_m');
            $table->text('polygon_coordinates');
            $table->unsignedBigInteger('station_id');
            $table->timestamps();

            $table->foreign('station_id')->references('id')->on('weather_station');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('parcel');
    }
}
