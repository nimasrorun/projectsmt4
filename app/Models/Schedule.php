<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    public function user(): BelongsTo {
        return $this->belongsTo(users::class);
    }

    protected $fillable = [
        'judul', 'deskripsi', 'tanggal',
        'jam', 
    ];
}
