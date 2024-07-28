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
        Schema::create('longitudinal_profile_of_the_roads', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_of_region_km');
            $table->float('start_of_region_m');
            $table->float('end_of_region_km');
            $table->float('end_of_region_m');
            $table->float('length_m');
            $table->float('slope');
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
        Schema::dropIfExists('longitudinal_profile_of_the_roads');
    }
};
