<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\TopikPublikasi;

class ArsipDokumen extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'dokumen',
        'topik_publikasi_id',
    ];

    public function topik_publikasi(): BelongsTo
    {
        return $this->belongsTo(TopikPublikasi::class);
    }
}
