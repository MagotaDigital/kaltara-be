<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\BeritaModel;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    protected $beritaModel;

    public function __construct(BeritaModel $beritaModel) {
        $this->beritaModel = $beritaModel;
    }

    public function index(Request $request)
    {
        $kategori = $request->input('kategori');

        $data = [
            // nav data
            'dashboard_publik' => $this->beritaModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->beritaModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->beritaModel->getKategoriBerita(),
            'ppid' => $this->beritaModel->getPPID(),
            // main data
            'berita_terkini' => $this->beritaModel->getBeritaTerkini($kategori),
            'berita_terpopuler' => $this->beritaModel->getBeritaTerpopuler($kategori),
            'berita' => $this->beritaModel->getBerita($kategori),
        ];

        return view('v_berita', $data);
    }

    public function detailBerita($slug)
    {
        $data = [
            // nav data
            'dashboard_publik' => $this->beritaModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->beritaModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->beritaModel->getKategoriBerita(),
            'ppid' => $this->beritaModel->getPPID(),
            // main data
            'berita_terbaru' => $this->beritaModel->getBeritaTerbaru($slug),
            'berita' => $this->beritaModel->getDetailBerita($slug),
        ];

        return view('v_detailberita', $data);
    }
}
