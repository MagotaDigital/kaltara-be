<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\KategoriLayananPublik;

class LayananPublik extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'deskripsi',
        'logo',
        'deskripsi_singkat',
        'gambar',
        'kategori_layanan_publik_id',
        'slug',
    ];

    protected $casts = [
        'gambar' => 'array',
    ];

    public function kategori_layanan_publik(): BelongsTo
    {
        return $this->belongsTo(KategoriLayananPublik::class);
    }
}
