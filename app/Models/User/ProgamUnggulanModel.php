<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProgamUnggulanModel extends Model
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
    public function getProgam()
    {
        return DB::table('progam_unggulans as p')
            ->join('kategori_progam_unggulans as k', 'p.kategori_progam_unggulan_id', 'k.id')
            ->select('p.*', 'k.nama as kategori')
            ->get();
    }
    public function getProgamPerKategori($kategori)
    {
        $id_kategori = DB::table('kategori_progam_unggulans as k')->where('k.nama',$kategori)->first();

        return DB::table('progam_unggulans as p')
            ->join('kategori_progam_unggulans as k', 'p.kategori_progam_unggulan_id', 'k.id')
            ->select('p.*', 'k.nama as kategori')
            ->where('p.kategori_progam_unggulan_id', $id_kategori)
            ->get();
    }

    public function getKategoriProgam()
    {
        return DB::table('kategori_layanan_publiks')
            ->select('kategori_layanan_publiks.nama as nama_kategori')
            ->get();
    }






    // public function getDetailAp($id) {
    //     return DB::table('anak_perusahaan')->where("id_ap", $id)->first();
    // }
}
