<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    /**
     * Kolom yang dapat diisi secara massal.
     * Ditambahkan file_instruction agar tidak diblokir Laravel lagi.
     */
    protected $fillable = [
        'user_id',
        'title',
        'subject_id',
        'description',
        'deadline',
        'status',
        'file_instruction', // <--- FIX: Tambahkan baris ini, jangan sampai typo ya!
    ];

    /**
     * Relasi: Setiap tugas dimiliki oleh satu User.
     * Ini menghubungkan user_id di tabel tasks dengan id di tabel users.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relasi: Setiap tugas terhubung ke satu Subject (Mata Kuliah).
     */
    public function subject(): BelongsTo
    {
        return $this->belongsTo(Subject::class);
    }
}
