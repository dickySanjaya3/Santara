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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();

            // Relasi ke tabel users: Menandakan mata kuliah ini milik siapa
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // Nama Mata Kuliah (contoh: Pemrograman Web, AI, dsb.)
            $table->string('name');

            // Warna untuk estetika Card di Dashboard (default ungu sesuai gambar referensimu)
            $table->string('color')->default('#8e7aa3');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
