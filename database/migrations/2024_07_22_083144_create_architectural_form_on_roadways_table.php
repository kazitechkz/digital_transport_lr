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
        Schema::create('architectural_form_on_roadways', function (Blueprint $table) {
            $table->id();
            $table->integer('order');
            $table->float('start_m');
            $table->float('end_m');
            $table->float('square_m');
            $table->float('perim_m');
            $table->text('feature')->nullable();
            $table->unsignedBigInteger('street_id');
            $table->unsignedBigInteger('side_id');
            $table->unsignedBigInteger('architectural_form_id');
            $table->timestamps();

            $table->foreign('street_id')->references('id')->on('streets')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('side_id')->references('id')->on('sides')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('architectural_form_id')->references('id')->on('architectural_forms')->onDelete('cascade')->onUpdate('cascade');

            $table->index('side_id');
            $table->index('street_id');
            $table->index('architectural_form_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('architectural_form_on_roadways');
    }
};
