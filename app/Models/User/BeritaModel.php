<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BeritaModel extends Model
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
    public function getDetailBerita($slug){
        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->where('b.slug',$slug)
            ->first();
    }

    public function getBeritaTerbaru($slug){
        $kategori = DB::table('beritas')
            ->select('beritas.kategori_berita_id')
            ->where('beritas.slug',$slug)
            ->first();

        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->orderBy('b.tanggal_rilis','desc')
            ->take(5)
            ->where('b.kategori_berita_id', $kategori)
            ->get();
    }




    // public function getDetailAp($id) {
    //     return DB::table('anak_perusahaan')->where("id_ap", $id)->first();
    // }
}
