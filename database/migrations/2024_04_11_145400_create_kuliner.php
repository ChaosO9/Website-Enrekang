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
        Schema::create('kuliner', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kuliner')->nullable();
            $table->string('alamat_kuliner')->nullable();
            $table->string('harga_kuliner')->nullable();
            $table->text('deskripsi_kuliner')->nullable();
            $table->string('foto_kuliner')->nullable();
          $table->timestamps();
      });
 }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kuliner');
    }
};
