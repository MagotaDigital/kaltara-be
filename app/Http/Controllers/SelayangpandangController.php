<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\SelayangpandangModel;
use Illuminate\Http\Request;

class SelayangpandangController extends Controller
{
    protected $selayangpandangModel;

    public function __construct(SelayangpandangModel $selayangpandangModel)
    {
        $this->selayangpandangModel = $selayangpandangModel;
    }

    public function index(Request $request)
    {
        $data = [
            // nav data
            'dashboard_publik' => $this->selayangpandangModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->selayangpandangModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->selayangpandangModel->getKategoriBerita(),
            'ppid' => $this->selayangpandangModel->getPPID(),
            // main data
            'penghargaan' => $this->selayangpandangModel->getPenghargaan(),
        ];

        return view('v_selayangpandang', $data);
    }
}
