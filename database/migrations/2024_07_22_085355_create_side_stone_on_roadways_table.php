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
        Schema::create('side_stone_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_m');
            $table->float('end_m');
            $table->float('length_m');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('side_stone_stamp_id');
            $table->unsignedBigInteger('side_stone_type_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_stone_stamp_id')->references('id')->on('side_stone_stamps')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_stone_type_id')->references('id')->on('side_stone_types')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('side_stone_stamp_id');
            $table->index('side_stone_type_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('side_stone_on_roadways');
    }
};
