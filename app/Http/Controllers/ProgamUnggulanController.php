<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\ProgamUnggulanModel;
use Illuminate\Http\Request;

class LayananPublikController extends Controller
{
    protected $progamunggulanModel;

    public function __construct(ProgamUnggulanModel $progamunggulanModel)
    {
        $this->progamunggulanModel = $progamunggulanModel;
    }

    public function index(Request $request)
    {
        $kategori = $request->input('kategori');

        if ($kategori == null) {
            $data = [
                // nav data
                'dashboard_publik' => $this->progamunggulanModel->getDashboardPublik(),
                'kategori_layanan_publik' => $this->progamunggulanModel->getKategoriLayananPublik(),
                'kategori_berita' => $this->progamunggulanModel->getKategoriBerita(),
                'ppid' => $this->progamunggulanModel->getPPID(),
                // main data
                'kategori_progam' => $this->progamunggulanModel->getKategoriProgam(),
                'progam_unggulan' => $this->progamunggulanModel->getProgam(),
            ];
        } else
        {
            $data = [
                // nav data
                'dashboard_publik' => $this->progamunggulanModel->getDashboardPublik(),
                'kategori_layanan_publik' => $this->progamunggulanModel->getKategoriLayananPublik(),
                'kategori_berita' => $this->progamunggulanModel->getKategoriBerita(),
                'ppid' => $this->progamunggulanModel->getPPID(),
                // main data
                'kategori_progam' => $this->progamunggulanModel->getKategoriProgam(),
                'progam_unggulan' => $this->progamunggulanModel->getProgamPerKategori($kategori),
            ];
        }

        return view('v_progam_unggulan', $data);
    }
}
