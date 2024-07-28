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
        Schema::create('traffic_light_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('on_axis');
            $table->boolean('have_controller');
            $table->integer('traffic_light_qty');
            $table->integer('pedestrian_traffic_light_qty');
            $table->integer('rotary_section_qty');
            $table->boolean('have_column');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('traffic_light_type_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('traffic_light_type_id')->references('id')->on('type_traffic_lights')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('traffic_light_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('traffic_light_on_roadways');
    }
};
