<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\LayananPublikModel;
use Illuminate\Http\Request;

class LayananPublikController extends Controller
{
    protected $layananpublikModel;

    public function __construct(LayananPublikModel $layananpublikModel) {
        $this->layananpublikModel = $layananpublikModel;
    }

    public function index(Request $request)
    {
        $kategori = $request->input('kategori');

        $data = [
            // nav data
            'dashboard_publik' => $this->layananpublikModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->layananpublikModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->layananpublikModel->getKategoriBerita(),
            'ppid' => $this->layananpublikModel->getPPID(),
            // main data
            'layanan_publik' => $this->layananpublikModel->getLayanan($kategori),
            'kategori_layanan' => $this->layananpublikModel->getKategoriLayanan($kategori),
        ];

        return view('v_layanan_publik', $data);
    }

    public function detailLayananPublik($slug)
    {
        $data = [
            // nav data
            'dashboard_publik' => $this->layananpublikModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->layananpublikModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->layananpublikModel->getKategoriBerita(),
            'ppid' => $this->layananpublikModel->getPPID(),
            // main data
            'layanan_publik' => $this->layananpublikModel->getDetailLayanan($slug),
        ];

        return view('v_detail_berita', $data);
    }
}
