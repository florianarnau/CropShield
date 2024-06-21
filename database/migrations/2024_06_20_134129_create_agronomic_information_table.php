<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgronomicInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agronomic_information', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('varieties_id');
            $table->unsignedBigInteger('parcel_id');
            $table->unsignedBigInteger('culture_id');
            $table->timestamps();

            $table->foreign('varieties_id')->references('id')->on('varieties')->onDelete('cascade');
            $table->foreign('parcel_id')->references('id')->on('parcel')->onDelete('cascade');
            $table->foreign('culture_id')->references('id')->on('culture')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agronomic_information');
    }
}
