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
        Schema::create('railway_transfer_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('location_m');
            $table->float('location_km');
            $table->float('path_qty');
            $table->boolean('has_barrier');
            $table->boolean('has_road_sign');
            $table->boolean('has_alarm_sign');
            $table->boolean('has_fence');
            $table->boolean('has_traffic_light');
            $table->boolean('has_security');
            $table->integer('visible_distance_length');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('barrier_type_id');
            $table->unsignedBigInteger('floor_condition_id');
            $table->timestamps();
            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('barrier_type_id')->references('id')->on('barrier_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('floor_condition_id')->references('id')->on('flooring_conditions')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('barrier_type_id');
            $table->index('floor_condition_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('railway_transfer_on_roadways');
    }
};
