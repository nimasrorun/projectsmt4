<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metode_pembayaran extends Model
{
    use HasFactory;
    public function transaksi(): HasMany {
        return $this->hasMany(transaksi::class);
   }
}
