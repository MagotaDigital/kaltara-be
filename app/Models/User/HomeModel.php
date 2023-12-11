<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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

    public function getBeritaTerkini()
    {
        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->orderBy('b.tanggal_rilis','desc')
            ->take(5)
            ->get();
    }

    public function getBeritaTerpopuler()
    {
        return DB::table('beritas as b')
            ->join('kategori_beritas as k','b.kategori_berita_id','k.id')
            ->select('b.*','k.nama as kategori')
            ->orderBy('b.view','desc')
            ->take(5)
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
            ->join('topik_publikasis as t', 'a.topik_publikasi_id', 't.id')
            ->select('a.*', 't.nama as topik')
            ->where('t.nama', 'Transparansi Pengelolaan Keuangan Daerah')
            ->get();
    }

    public function getKategoriLayananPublik()
    {
        return DB::table('kategori_layanan_publiks')->get();
    }


}
