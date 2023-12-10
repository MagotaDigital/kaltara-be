<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class LayananPublikModel extends Model
{
    use HasFactory;

    // navbar data
    public function getDashboardPublik()
    {
        return DB::table('dashboard_publiks')->get();
    }
    public function getPPID()
    {
        return DB::table('p_p_i_d_s')->get();
    }
    public function getKategoriBerita()
    {
        return DB::table('kategori_beritas')->get();
    }
    public function getKategoriLayananPublik()
    {
        return DB::table('kategori_layanan_publiks')->get();
    }


    // main data
    public function getLayanan($kategori)
    {
        $id_kategori = DB::table('kategori_layanan_publiks as k')->where('k.nama',$kategori)->first();

        return DB::table('layanan_publiks as l')
            ->join('kategori_layanan_publiks as k', 'l.kategori_layanan_publik_id', 'k.id')
            ->select('l.*', 'k.nama as kategori')
            ->where('l.kategori_layanan_publik_id', $id_kategori)
            ->get();
    }
    public function getKategoriLayanan($kategori)
    {
        return DB::table('kategori_layanan_publiks')
            ->select('kategori_layanan_publiks.nama as nama_kategori')
            ->where('kategori_layanan_publiks.nama', $kategori)
            ->first();
    }
    public function getDetailLayanan($slug)
    {
        return DB::table('layanan_publiks as l')
            ->join('kategori_layanan_publiks as k', 'l.kategori_layanan_publik_id', 'k.id')
            ->select('l.*', 'k.nama as kategori')
            ->where('l.slug', $slug)
            ->first();
    }






    // public function getDetailAp($id) {
    //     return DB::table('anak_perusahaan')->where("id_ap", $id)->first();
    // }
}
