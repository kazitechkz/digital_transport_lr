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
        Schema::create('width_roadway_on_highways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_of_region_km');
            $table->float('start_of_region_m');
            $table->float('end_of_region_km');
            $table->float('end_of_region_m');
            $table->float('reverse_width_m');
            $table->float('both_width_m');
            $table->float('straight_width_m');
            $table->unsignedBigInteger('street_id');
            $table->timestamps();
            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->index('street_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('width_roadway_on_highways');
    }
};
