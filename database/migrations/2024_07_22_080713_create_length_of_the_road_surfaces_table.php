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
        Schema::create('length_of_the_road_surfaces', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start');
            $table->float('end');
            $table->float('total_length');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('coverage_type_id');
            $table->timestamps(0);
            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coverage_type_id')->references('id')->on('coverage_types')->onDelete('cascade')->onUpdate('cascade');
            $table->index('coverage_type_id');
            $table->index('street_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('length_of_the_road_surfaces');
    }
};
