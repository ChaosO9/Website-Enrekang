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
        Schema::create('review_kuliner', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kuliner')->constrained(table: 'kuliner', indexName: 'kuliner_id2')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('user_id')->constrained(table: 'users', indexName: 'users_id5')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('rating_bintang');
            $table->text('komentar')->nullable();
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_kuliner');
    }
};