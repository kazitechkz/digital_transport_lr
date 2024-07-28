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
        Schema::create('information_of_road_markings', function (Blueprint $table) {
            $table->id();
            $table->float('road_width_sm');
            $table->float('road_length_m');
            $table->float('road_square_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('road_marking_id');
            $table->unsignedBigInteger('road_marking_material_id')->nullable();
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('road_marking_id')->references('id')->on('road_markings')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('road_marking_material_id')->references('id')->on('road_marking_materials')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('road_marking_id');
            $table->index('road_marking_material_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information_of_road_markings');
    }
};
