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
        Schema::create('wisata', function (Blueprint $table) {
            $table->id();
            $table->string('nama_wisata')->nullable();
            $table->string('alamat_wisata')->nullable();
            $table->string('harga_tiket')->nullable();
            $table->string('id_kategori')->nullable();
            $table->string('fasilitas')->nullable();
            $table->text('deskripsi_wisata')->nullable();
            $table->string('foto_wisata')->nullable();
            $table->text('maps')->nullable();
            $table->date('tanggal_upload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wisata');
    }
};
