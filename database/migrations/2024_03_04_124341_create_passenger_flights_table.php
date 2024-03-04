<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('passenger_flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('passenger_id');
            $table->unsignedInteger('flight_id');
            $table->string('class_type');
            $table->timestamps();

            $table->foreign('passenger_id')->references('id')->on('passengers');
            $table->foreign('flight_id')->references('id')->on('flights');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('passenger_flights');
    }
};
