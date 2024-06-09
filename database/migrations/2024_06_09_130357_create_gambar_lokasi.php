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
        Schema::create('gambar_lokasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('wisata')->constrained(table: 'wisata', indexName: 'wisata_id2')->onDelete('cascade');
            $table->string('gambar')->nullable(false);
            $table->string('deskripsi')->nullable(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gambar_lokasi');
    }
};