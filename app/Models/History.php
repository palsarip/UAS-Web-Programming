<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_reservasi',
        'jam_reservasi_mulai',
        'jam_reservasi_selesai'
    ];

    protected $table = 'history';
    use HasFactory;
}
