<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Metode_pembayaran extends Model
{
    use HasFactory;
    public function transaksi(): HasMany {
        return $this->hasMany(transaksi::class);
   }
   protected $fillable = [
    'bank', 
   ];
}
