<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PimpinanDaerah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'jabatan',
        'awal_jabatan',
        'akhir_jabatan',
        'tempat_lahir',
        'tanggal_lahir',
        'biodata',
        'riwayat_pendidikan',
        'karir',
        'gambar',
        'dokumen',
    ];
}
