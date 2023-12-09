<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HomeModel extends Model
{
    use HasFactory;

    public function getSlider()
    {
        return DB::table('slider_images')->get();
    }

    public function getLayananPublik()
    {
        return DB::table('layanan_publiks')->get();
    }

    public function getDashboardPublik()
    {
        return DB::table('dashboard_publiks')->get();
    }

    public function getPromosi()
    {
        return DB::table('promosis')->get();
    }

    public function getPPID()
    {
        return DB::table('p_p_i_d_s')->get();
    }

    public function getBerita()
    {
        return DB::table('kategori_beritas')
            ->join(DB::raw('(SELECT b.*, ROW_NUMBER() OVER (PARTITION BY b.kategori_berita_id ORDER BY b.tanggal_rilis DESC) AS ranking FROM beritas b) AS beritas'), function ($join) {
                $join->on('kategori_beritas.id', '=', 'beritas.kategori_berita_id');
            })
            ->select('kategori_beritas.nama as kategori', 'beritas.*')
            ->where('beritas.ranking', 1)
            ->get();
    }

    public function getKategoriBerita()
    {
        return DB::table('kategori_beritas')->get();
    }

    public function getProgamUnggulan()
    {
        return DB::table('progam_unggulans')->get();
    }

    public function getAksesCepat()
    {
        return DB::table('akses_cepats')->get();
    }

    public function getArsipDokumen()
    {
        return DB::table('arsip_dokumens as a')
            ->join('topik_publikasis as t', 'a.topik_publikasi_id', '=', 't.id')
            ->select('a.*', 't.nama')
            ->where('t.nama', 'Transparansi Pengelolaan Keuangan Daerah')
            ->get();
    }



    // public function getDetailAp($id) {
    //     return DB::table('anak_perusahaan')->where("id_ap", $id)->first();
    // }
}
