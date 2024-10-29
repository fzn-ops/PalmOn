<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Simulasi extends Model
{
    use HasFactory;

    protected $table = 'simulasi';

    protected $fillable = [
        'nama_kebun',
        'lokasi',
        'luas_kebun',
        'jumlah_pohon',
        'jenis_bibit',
        'jenis_tanah',
    ];
}
