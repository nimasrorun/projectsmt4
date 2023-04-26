<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    public function user(): BelongsTo {
        return $this->belongsTo(users::class);
    }
    public function metode_pembayaran(): BelongsTo {
        return $this->belongsTo(metode_pembayaran::class);
    }
    protected $fillable = [
        'tanggal', 'harga', 'bukti_pembayaran',
        'nama_akun_bank', 'nama_bank',
    ];
}
