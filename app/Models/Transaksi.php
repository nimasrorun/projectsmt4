<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $primaryKey = 'kode_transaksi';
    protected $fillable = [
        'tanggal', 'harga', 'bukti_pembayaran', 'nama_akun_bank', 'nama_bank', 'id'
    ];
}
