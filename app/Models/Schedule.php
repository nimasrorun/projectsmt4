<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'kode_schedule';
    protected $fillable = [
        'judul', 'deskripsi', 'tanggal',
        'jam', 'status', 'id',];

    public function user(): BelongsTo {
        return $this->belongsTo(users::class);
    }
}
