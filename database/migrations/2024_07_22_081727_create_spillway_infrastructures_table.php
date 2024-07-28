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
        Schema::create('spillway_infrastructures', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('on_axis_m');
            $table->float('from_axis_m');
            $table->boolean('is_on_the_roadway');
            $table->boolean('is_on_the_sidewalk');
            $table->boolean('is_on_the_lawn');
            $table->text('note')->nullable();
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('well_type_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('well_type_id')->references('id')->on('wells_types')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('well_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spillway_infrastructures');
    }
};
