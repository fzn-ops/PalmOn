<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pencatatan_Kalkulasi extends Model
{
    use HasFactory;

    protected $table = 'pencatatan_kalkulasis'; // Pastikan nama tabel benar

    protected $fillable = [
        'harga_sawit',
        'hasil_panen',
        'tanggal_panen',
        'pengeluaran_panen',
    ];
}
