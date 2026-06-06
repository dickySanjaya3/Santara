<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\SubjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/panduan', 'pages.panduan')->name('panduan');
Route::view('/tentang', 'pages.tentang')->name('tentang');

// Mengubah middleware dari ['auth', 'verified'] menjadi ['auth'] saja
Route::middleware(['auth'])->group(function () {

    // --- Dashboard & Data Entry ---
    Route::get('/dashboard', [TaskController::class, 'index'])->name('dashboard');
    Route::get('/input-data', [TaskController::class, 'create'])->name('tasks.create');

    // --- Subject Routes (Wadah Matkul) ---
    Route::post('/subjects', [SubjectController::class, 'store'])->name('subjects.store');
    Route::delete('/subjects/{subject}', [SubjectController::class, 'destroy'])->name('subjects.destroy');
    Route::get('/subjects/{subject}', [SubjectController::class, 'show'])->name('subjects.show');

    // --- Task Routes (Detail Tugas) ---
    Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

    /**
     * ROUTE BARU: Update Status Tugas
     * Digunakan untuk fitur "Mark as Done" di dalam Module Detail Modal
     */
    Route::patch('/tasks/{task}/status', [TaskController::class, 'updateStatus'])->name('tasks.updateStatus');

    // --- Profile Routes ---
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
