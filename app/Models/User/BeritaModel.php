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
    public function getBeritaTerkini()
    {
        return DB::table('kategori_beritas')
            ->join(DB::raw('(SELECT b.*, ROW_NUMBER() OVER (PARTITION BY b.kategori_berita_id ORDER BY b.tanggal_rilis DESC) AS ranking FROM beritas b) AS beritas'), function ($join) {
                $join->on('kategori_beritas.id', '=', 'beritas.kategori_berita_id');
            })
            ->select('kategori_beritas.nama as kategori', 'beritas.*')
            ->where('beritas.ranking', 1)
            ->get();
    }
    public function getBerita($kategori){
        $id_kategori = DB::table('kategori_beritas as k')->select('k.id')->where('k.nama', $kategori)->first();

        $id_kategori = $id_kategori->id;

        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->where('b.slug',$id_kategori)
            ->get();
    }
    public function getDetailBerita($slug){
        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->where('b.slug',$slug)
            ->first();
    }

    public function getBeritaTerbaru($slug){
        $id_kategori = DB::table('beritas')
            ->select('beritas.kategori_berita_id as id')
            ->where('beritas.slug',$slug)
            ->first();

        $id_kategori = $id_kategori->id;

        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->orderBy('b.tanggal_rilis','desc')
            ->take(5)
            ->where('b.kategori_berita_id', $id_kategori)
            ->get();
    }
}
