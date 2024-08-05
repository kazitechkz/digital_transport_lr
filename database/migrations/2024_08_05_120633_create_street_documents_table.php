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
        Schema::create('street_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('file_id')->references('id')->on('files')->cascadeOnDelete();
            $table->foreignId('document_type_id')->references('id')->on('document_types')->cascadeOnDelete();
            $table->foreignId('street_id')->references('id')->on('streets')->cascadeOnDelete();
            $table->string('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('street_documents');
    }
};
