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
        Schema::create('road_sign_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('location_km');
            $table->float('location_m');
            $table->boolean('has_left_adjunctions_location');
            $table->boolean('has_left_direct_location');
            $table->boolean('has_left_reverse_location');
            $table->boolean('has_right_adjunctions_location');
            $table->boolean('has_right_direct_location');
            $table->boolean('has_right_reverse_location');
            $table->boolean('has_berm');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('road_sign_id');
            $table->unsignedBigInteger('road_sign_condition_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('road_sign_id')->references('id')->on('road_signs')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('road_sign_condition_id')->references('id')->on('road_sign_conditions')->onDelete('cascade')->onUpdate('cascade');

            $table->index('street_id');
            $table->index('road_sign_id');
            $table->index('road_sign_condition_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('road_sing_on_roadways');
    }
};
