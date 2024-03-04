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
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string("iata_code");
            $table->unsignedInteger("departure_location");
            $table->unsignedInteger("arrival_location");
            $table->timestamp("departure_time");
            $table->timestamp("arrival_time");
            $table->timestamps();

            $table->foreign('departure_location')->references('id')->on('locations');
            $table->foreign('arrival_location')->references('id')->on('locations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
};
