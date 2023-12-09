<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\KategoriBerita;

class Berita extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'slug',
        'penulis',
        'peliput',
        'tanggal_rilis',
        'gambar',
        'konten',
        'kategori_berita_id',
    ];

    public function kategori_berita(): BelongsTo
    {
        return $this->belongsTo(KategoriBerita::class);
    }
}
