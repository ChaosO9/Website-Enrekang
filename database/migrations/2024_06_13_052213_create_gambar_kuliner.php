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
        Schema::create('gambar_kuliner', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kuliner')->constrained(table: 'kuliner', indexName: 'kuliner_id2')->onDelete('cascade')->onUpdate('cascade');;
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
        Schema::dropIfExists('gambar_kuliner');
    }
};
