<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $homeModel;

    public function __construct(HomeModel $homeModel) {
        $this->homeModel = $homeModel;
    }

    public function index()
    {
        $data = [
            'slider' => $this->homeModel->getSlider(),
            'dashboard_publik' => $this->homeModel->getDashboardPublik(),
            'layanan_publik' => $this->homeModel->getLayananPublik(),
            'ppid' => $this->homeModel->getPPID(),
            'promosi' => $this->homeModel->getPromosi(),
            'berita' => $this->homeModel->getBerita(),
            'kategori_berita' => $this->homeModel->getKategoriBerita(),
            'progam_unggulan' => $this->homeModel->getProgamUnggulan(),
            'akses_cepat' => $this->homeModel->getAksesCepat(),
            'arsip_dokumen' => $this->homeModel->getArsipDokumen(),
        ];

        return view('v_home', $data);
    }
}
