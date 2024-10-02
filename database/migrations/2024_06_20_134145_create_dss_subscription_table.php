<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDssSubscriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dss_subscription', function (Blueprint $table) {
            $table->id();
            $table->dateTime('startDate');
            $table->dateTime('endDate');
            $table->enum('type', ['abonnement gratuit', 'abonnement gratuit pour essai', 'abonnement payant'])->default('abonnement gratuit pour essai');
            $table->unsignedBigInteger('parcel_id');
            $table->unsignedBigInteger('dss_id');
            $table->unsignedBigInteger('station_id');
            $table->timestamps();

            $table->foreign('parcel_id')->references('id')->on('parcel')->onDelete('cascade');
            $table->foreign('dss_id')->references('id')->on('dss')->onDelete('cascade');
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
        Schema::dropIfExists('dss_subscription');
    }
}
