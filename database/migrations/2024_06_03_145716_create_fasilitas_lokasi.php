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
        Schema::create('fasilitas_lokasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata')->constrained(table: 'wisata', indexName: 'wisata_id')->onDelete('cascade');
            $table->foreignId('fasilitas')->constrained(table: 'fasilitas', indexName: 'fasilitas_id')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas_lokasi');
    }
};