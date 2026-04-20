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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();

            // Menghubungkan tugas ke user yang login
            $table->foreignId('user_id')->constrained()->onDelete('cascade');

            // --- INI YANG KURANG ---
            // Menghubungkan tugas ke Mata Kuliah (Subject)
            $table->foreignId('subject_id')->constrained()->onDelete('cascade');

            $table->string('title'); // Judul tugas
            $table->text('description')->nullable(); // Deskripsi tugas
            $table->date('deadline'); // Tanggal pengumpulan

            // Status tugas
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
