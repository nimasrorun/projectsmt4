<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'kode_transaksi';
    protected $fillable = [
        'tanggal', 'harga', 'bukti_pembayaran',
        'nama_akun_bank', 'nama_bank',
    ];
    public function user(): BelongsTo {
        return $this->belongsTo(users::class);
    }
    public function metode_pembayaran(): BelongsTo {
        return $this->belongsTo(metode_pembayaran::class);
    }
    
}
