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
     * Sesuaikan dengan kolom yang kita buat di migration tadi.
     */
    protected $fillable = [
        'user_id',
        'title',
        'subject_id',
        'description',
        'deadline',
        'status',
    ];

    /**
     * Relasi: Setiap tugas dimiliki oleh satu User.
     * Ini menghubungkan user_id di tabel tasks dengan id di tabel users.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
