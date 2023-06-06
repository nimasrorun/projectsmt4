<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'kode_transaksi';
    protected $fillable = [
        'tanggal', 'harga', 'bukti_pembayaran',
        'nama_akun_bank', 'nomer_rekening', 'kode_pembayaran', 'id'
    ];
    public function user(): BelongsTo {
        return $this->belongsTo(User::class, 'id', 'id');
    }
    public function metode_pembayaran(): BelongsTo {
        return $this->belongsTo(metode_pembayaran::class);
    }
    
}
