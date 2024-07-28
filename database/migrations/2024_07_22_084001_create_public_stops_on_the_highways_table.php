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
        Schema::create('public_stops_on_the_highways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_m');
            $table->float('end_m');
            $table->text('bus_stop')->nullable();
            $table->integer('pavilion_qty');
            $table->float('distance_to_the_roadway_m');
            $table->boolean('have_route');
            $table->float('boarding_square_m');
            $table->float('extension_square_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('public_stops_on_the_highways');
    }
};
