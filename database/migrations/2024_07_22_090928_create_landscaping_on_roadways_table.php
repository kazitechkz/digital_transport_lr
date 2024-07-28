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
        Schema::create('landscaping_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_location_right_km');
            $table->float('start_location_right_m');
            $table->float('end_location_right_km');
            $table->float('end_location_right_m');
            $table->float('start_location_left_km');
            $table->float('start_location_left_m');
            $table->float('end_location_left_km');
            $table->float('end_location_left_m');
            $table->float('two_row_m');
            $table->float('three_row_m');
            $table->float('four_row_m');
            $table->float('five_row_m');
            $table->float('six_row_m');
            $table->float('eight_row_m');
            $table->float('total_length_m');
            $table->float('decorative_length_km');
            $table->float('length_to_edge_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('landscaping_condition_id');
            $table->timestamps(0);

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('landscaping_condition_id')->references('id')->on('landscaping_conditions')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('landscaping_condition_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landscaping_on_roadways');
    }
};
