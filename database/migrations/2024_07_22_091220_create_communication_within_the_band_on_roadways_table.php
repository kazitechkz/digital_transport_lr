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
        Schema::create('communication_within_the_band_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('location_start_km');
            $table->float('location_start_m');
            $table->float('location_end_km');
            $table->float('location_end_m');
            $table->float('distance_edge_left_m');
            $table->float('distance_edge_right_m');
            $table->float('place_of_intersection_km');
            $table->float('place_of_intersection_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('ctype_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('ctype_id')->references('id')->on('communication_types')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('ctype_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('communication_within_the_band_on_roadways');
    }
};
