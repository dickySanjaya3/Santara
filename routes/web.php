<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard: Menampilkan Card per Matkul
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard');

    // Halaman Input Data (Form Matkul & Tugas)
    Route::get('/input-data', [TaskController::class, 'create'])->name('tasks.create');

    // Proses Simpan Data
    Route::post('/subjects', [TaskController::class, 'storeSubject'])->name('subjects.store');
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

    // Profile (Bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
