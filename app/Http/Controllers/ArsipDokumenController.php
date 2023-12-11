<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\ArsipDokumenModel;
use Illuminate\Http\Request;

class ArsipDokumenController extends Controller
{
    protected $arsipdokumenModel;

    public function __construct(ArsipDokumenModel $arsipdokumenModel)
    {
        $this->arsipdokumenModel = $arsipdokumenModel;
    }

    public function index(Request $request)
    {
        $data = [
            // nav data
            'dashboard_publik' => $this->arsipdokumenModel->getDashboardPublik(),
            'kategori_layanan_publik' => $this->arsipdokumenModel->getKategoriLayananPublik(),
            'kategori_berita' => $this->arsipdokumenModel->getKategoriBerita(),
            'ppid' => $this->arsipdokumenModel->getPPID(),
            // main data
            'dokumen' => $this->arsipdokumenModel->getDokumen(),
        ];

        return view('v_arsipdokumen', $data);
    }
}
