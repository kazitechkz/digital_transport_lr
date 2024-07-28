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
        Schema::create('fencing_and_guide_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_m');
            $table->float('end_m');
            $table->float('qty');
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('fencing_guide_type_id');
            $table->unsignedBigInteger('unit_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('fencing_guide_type_id')->references('id')->on('fencing_and_guide_types')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('unit_id')->references('id')->on('units')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('fencing_guide_type_id');
            $table->index('unit_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fencing_and_guide_on_roadways');
    }
};
