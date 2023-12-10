@extends('layout/v_template')

@section('content')

<section id="hero-top-50" style="background: url('https://images.unsplash.com/photo-1646432581107-06cd4333cfde?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-cover">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Arsip dan Dokumen</li>
                    </ol>
                </nav>
                <div class="hero-desc">
                    <p class="fs-3 font-title">Arsip dan Dokumen</p>
                    <p class="font-primary">Akses dan unduh dokumen resmi yang dirilis Pemerintah Jawa Barat.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content-about" class="container mb-5">
       <div class="row">
            <aside class="p-3 font-primary col-md-3">
                <nav class="nav flex-column">
                    <p class="fw-bold">Topik Publikasi</p>
                        <a class="nav-link active" aria-current="page" href="#" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Dokumen Perencanaan</a>

                        <a class="nav-link" href="#" id="lap-pertanggungjawaban-tab" data-bs-toggle="pill" data-bs-target="#pills-lap-pertanggungjawaban" type="button" role="tab" aria-controls="pills-lap-pertanggungjawaban" aria-selected="false">Laporan Pertanggungjawaban</a>

                        <a class="nav-link" href="#" id="produkhukum-tab" data-bs-toggle="pill" data-bs-target="#pills-produkhukum" type="button" role="tab" aria-controls="pills-produkhukum" aria-selected="false">Produk Hukum</a>

                        <a class="nav-link" href="#" id="kepegawain-tab" data-bs-toggle="pill" data-bs-target="#pills-kepegawain" type="button" role="tab" aria-controls="pills-kepegawain" aria-selected="false">Transparansi Kepegawaian</a>

                        <a class="nav-link" href="#" id="keuangan-tab" data-bs-toggle="pill" data-bs-target="#pills-keuangan" type="button" role="tab" aria-controls="pills-keuangan" aria-selected="false">Transparansi Pengelolaan Keuangan Daerah</a>
                </nav>
            </aside>
            <div class="tab-content col-md-9 ps-4" id="v-pills-tabContent">
                <!-- TAB PERTAMA -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Dokumen Perencanaan</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="col-md-12 font-primary d-flex justify-content-between mt-3">
                            <p>Terdapat 27 Kabupaten dan Kota yang ada di lingkup Pemprov Kalimantan Utara</p>
                            <div class="d-flex list-type">
                                <p class="me-2">Tipe Tampilan</p>
                                <a href="" class="me-2"><i class="ri-list-check"></i></a>
                                <a href=""><i class="ri-layout-grid-fill"></i></a>
                            </div>
                        </div> -->

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="assets/img/pdf.svg" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <span class="border border-1 bg-body-tertiary p-2 rounded">Dokumen Perencanaan</span>
                                            <p class="fw-bold fs-5 mt-3">Rencana Kerja Pemerintah Daerah (RKPD) Jabar Tahun 2023 - Part 2 (Hal 497-973)</p>
                                            <p class="mb-3">Dokumen penjabaran dari RPJMD (Rencana Pembangunan Jangka Menengah Daerah) Provinsi Jawa Barat yang memuat rancangan kerangka ekonomi Daerah, prioritas pembangunan Daerah, serta rencana kerja dan pendanaan</p>
                                            <div>
                                                <a href="" class="btn-bordered fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3 me-2" style="border-radius: 10px;"><i class="ri-eye-line me-2"></i> Lihat</a>
                                                <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3"><i class="ri-download-2-fill me-2"></i> Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- TAB KEDUA -->
                <div class="tab-pane fade" id="pills-lap-pertanggungjawaban" role="tabpanel" aria-labelledby="lap-pertanggungjawaban-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Laporan Pertanggungjawaban</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>
                        <!-- <div class="col-md-12 font-primary d-flex justify-content-between mt-3">
                            <p>Terdapat 27 Kabupaten dan Kota yang ada di lingkup Pemprov Kalimantan Utara</p>
                            <div class="d-flex list-type">
                                <p class="me-2">Tipe Tampilan</p>
                                <a href="" class="me-2"><i class="ri-list-check"></i></a>
                                <a href=""><i class="ri-layout-grid-fill"></i></a>
                            </div>
                        </div> -->

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="assets/img/pdf.svg" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <span class="border border-1 bg-body-tertiary p-2 rounded">Laporan Pertanggungjawaban</span>
                                            <p class="fw-bold fs-5 mt-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023</p>
                                            <p class="mb-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023 berisi gambaran tingkat capaian kinerja dan tingkat capaian anggaran program pembangunan di seluruh Perangkat Daerah Jawa Barat.</p>
                                            <div>
                                                <a href="" class="btn-bordered fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3 me-2" style="border-radius: 10px;"><i class="ri-eye-line me-2"></i> Lihat</a>
                                                <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3"><i class="ri-download-2-fill me-2"></i> Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- TAB KETIGA -->
                <div class="tab-pane fade" id="pills-produkhukum" role="tabpanel" aria-labelledby="produkhukum-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Produk Hukum</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="assets/img/pdf.svg" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <span class="border border-1 bg-body-tertiary p-2 rounded">Produk Hukum</span>
                                            <p class="fw-bold fs-5 mt-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023</p>
                                            <p class="mb-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023 berisi gambaran tingkat capaian kinerja dan tingkat capaian anggaran program pembangunan di seluruh Perangkat Daerah Jawa Barat.</p>
                                            <div>
                                                <a href="" class="btn-bordered fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3 me-2" style="border-radius: 10px;"><i class="ri-eye-line me-2"></i> Lihat</a>
                                                <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3"><i class="ri-download-2-fill me-2"></i> Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- TAB KEEMPAT -->
                <div class="tab-pane fade" id="pills-kepegawain" role="tabpanel" aria-labelledby="kepegawain-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Transparansi Kepegawaian</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="assets/img/pdf.svg" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <span class="border border-1 bg-body-tertiary p-2 rounded">Produk Hukum</span>
                                            <p class="fw-bold fs-5 mt-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023</p>
                                            <p class="mb-3">Laporan Evaluasi Hasil Rencana Kegiatan Pemerintah Daerah (RKPD) Triwulan II Tahun 2023 berisi gambaran tingkat capaian kinerja dan tingkat capaian anggaran program pembangunan di seluruh Perangkat Daerah Jawa Barat.</p>
                                            <div>
                                                <a href="" class="btn-bordered fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3 me-2" style="border-radius: 10px;"><i class="ri-eye-line me-2"></i> Lihat</a>
                                                <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3"><i class="ri-download-2-fill me-2"></i> Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- TAB KELIMA -->
                <div class="tab-pane fade" id="pills-keuangan" role="tabpanel" aria-labelledby="keuangan-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Transparansi Pengelolaan Keuangan Daerah</p>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="assets/img/pdf.svg" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <span class="border border-1 bg-body-tertiary p-2 rounded">Transparansi Pengelolaan Keuangan Daerah</span>
                                            <p class="fw-bold fs-5 mt-3">Pergub Penjabaran Perubahan APBD Tahun 2022</p>
                                            <p class="mb-3">Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh Gubernur untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau dalam menyelenggarakan kewenangan pemerintah daerah terkait penjabaran</p>
                                            <div>
                                                <a href="" class="btn-bordered fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3 me-2" style="border-radius: 10px;"><i class="ri-eye-line me-2"></i> Lihat</a>
                                                <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3"><i class="ri-download-2-fill me-2"></i> Unduh</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>

@endsection
