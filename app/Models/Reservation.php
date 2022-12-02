<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'nama',
        'alamat',
        'tanggal_reservasi',
        'jam_reservasi_mulai',
        'jam_reservasi_selesai'
    ];
    
    use HasFactory;
}
