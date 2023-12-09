<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPerangkatDaerah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'pimpinan',
        'alamat',
        'link',
        'gambar',
    ];
}
