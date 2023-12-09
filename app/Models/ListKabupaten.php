<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListKabupaten extends Model
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
