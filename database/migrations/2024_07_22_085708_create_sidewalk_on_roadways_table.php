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
        Schema::create('sidewalk_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_m');
            $table->float('end_m');
            $table->float('length_m');
            $table->float('width_start_m');
            $table->float('width_end_m');
            $table->float('square_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('coverage_type_id');
            $table->unsignedBigInteger('position_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('coverage_type_id')->references('id')->on('coverage_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('coverage_type_id');
            $table->index('position_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sidewalk_on_roadways');
    }
};
