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
        Schema::create('intersection_and_junction_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('location_right_km');
            $table->float('location_right_m');
            $table->float('location_left_km');
            $table->float('location_left_m');
            $table->boolean('has_transiotional_high_speed_lanes');
            $table->boolean('has_road_sign');
            $table->boolean('has_tube');
            $table->boolean('has_signal_pole');
            $table->boolean('has_safety_island');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('coverage_type_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coverage_type_id')->references('id')->on('coverage_types')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('coverage_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('intersection_and_junction_on_roadways');
    }
};
