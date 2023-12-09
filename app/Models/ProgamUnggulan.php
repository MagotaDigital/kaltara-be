<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\KategoriProgamUnggulan;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProgamUnggulan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'organisasi',
        'link',
        'gambar',
        'sosmed',
        'kategori_progam_unggulan_id',
    ];

    public function kategori_progam_unggulan(): BelongsTo
    {
        return $this->belongsTo(KategoriProgamUnggulan::class);
    }
}
