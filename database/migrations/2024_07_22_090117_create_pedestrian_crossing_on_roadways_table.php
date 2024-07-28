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
        Schema::create('pedestrian_crossing_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('address_length_m');
            $table->boolean('bus_stop_has_pedestrian');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('pc_type_id');
            $table->unsignedBigInteger('pc_position_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pc_type_id')->references('id')->on('pedestrian_crossing_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('pc_position_id')->references('id')->on('pedestrian_crossing_positions')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('pc_type_id');
            $table->index('pc_position_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedestrian_crossing_on_roadways');
    }
};
