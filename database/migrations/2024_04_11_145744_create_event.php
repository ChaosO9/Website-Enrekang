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
        Schema::create('event', function (Blueprint $table) {
            $table->id();
            $table->string('nama_event')->nullable();
            $table->string('tempat_event')->nullable();
            $table->date('tanggal_pelaksanaan')->nullable();
            $table->date('tanggal_selesai')->nullable();
            $table->date('waktu_event')->nullable();
            $table->text('deskripsi_event')->nullable();
            $table->string('foto_event')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
