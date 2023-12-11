<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\TentangModel;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    protected $tentangModel;

    public function __construct(TentangModel $tentangModel)
    {
        $this->tentangModel = $tentangModel;
    }

    public function index(Request $request)
    {
        $data = [
            // nav data
            'dashboard_publik' => $this->tentangModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->tentangModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->tentangModel->getKategoriBerita(),
            'ppid' => $this->tentangModel->getPPID(),
            // main data
            'penghargaan' => $this->tentangModel->getPenghargaan(),
        ];

        return view('v_tentang', $data);
    }
}
