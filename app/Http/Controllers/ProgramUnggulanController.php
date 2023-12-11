<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User\ProgramUnggulanModel;
use Illuminate\Http\Request;

class ProgramUnggulanController extends Controller
{
    protected $programunggulanModel;

    public function __construct(ProgramUnggulanModel $programunggulanModel)
    {
        $this->programunggulanModel = $programunggulanModel;
    }

    public function index(Request $request)
    {
        $kategori = $request->input('kategori');

        if ($kategori == null) {
            $data = [
                // nav data
                'dashboard_publik' => $this->programunggulanModel->getDashboardPublik(),
                'kategori_layanan_publik' => $this->programunggulanModel->getKategoriLayananPublik(),
                'kategori_berita' => $this->programunggulanModel->getKategoriBerita(),
                'ppid' => $this->programunggulanModel->getPPID(),
                // main data
                'kategori_program' => $this->programunggulanModel->getKategoriProgram(),
                'program_unggulan' => $this->programunggulanModel->getProgram(),
            ];
        } else
        {
            $data = [
                // nav data
                'dashboard_publik' => $this->programunggulanModel->getDashboardPublik(),
                'kategori_layanan_publik' => $this->programunggulanModel->getKategoriLayananPublik(),
                'kategori_berita' => $this->programunggulanModel->getKategoriBerita(),
                'ppid' => $this->programunggulanModel->getPPID(),
                // main data
                'kategori_program' => $this->programunggulanModel->getKategoriProgram(),
                'program_unggulan' => $this->programunggulanModel->getProgramPerKategori($kategori),
            ];
        }

        return view('v_programunggulan', $data);
    }
}
