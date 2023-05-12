<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $primaryKey = 'kode_schedule';
    protected $fillable = [
        'judul', 'deskripsi', 'tanggal', 'jam', 'id'
    ];
}
