<footer>
    <div class="container pb-5">
        <div class="row pb-4">
            <div class="col-md-12 py-5">
                <img src="https://kaltaraprov.go.id/source/assets/landing-css/img/icon/logopt.png" alt="" class="logo-footer">
            </div>
            <div class="footer-head">
                <div class="items d-flex">
                    <i class="ri-map-pin-2-fill me-2"></i>
                    <div>
                        <p class="fs-6 fw-bold">Kantor Gubernur Kalimantan Utara</p>
                        <p>Jl. Kol. Soetadji No.1, Tj. Selor Hilir, Kec. Tj. Selor, Kabupaten Bulungan, Kalimantan Utara 77212</p>
                    </div>
                </div>
                <div class="items d-flex">
                    <i class="ri-mail-fill me-2"></i>
                    <div>
                        <p class="fs-6 fw-bold">Surel</p>
                        <a href="" class="text-white">informasi @kaltaraprov.go.id</a>
                    </div>
                </div>
                <div class="items d-flex">
                    <i class="ri-mail-download-fill me-2"></i>
                    <div>
                        <p class="fs-6 fw-bold">Umpan Balik</p>
                        <a href="" class="text-white">Isi survei performa situs web</a>
                    </div>
                </div>
                <div class="items d-flex">
                    <i class="ri-global-fill me-2"></i>
                    <div>
                        <p class="fs-6 fw-bold">Media Sodial</p>
                        <div class="footer-sosmed">
                            <a href=""><i class="ri-facebook-box-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""><i class="ri-twitter-x-line"></i></a>
                            <a href=""><i class="ri-youtube-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-12 d-flex pb-0 pb-sm-3">
                <i class="ri-organization-chart me-2 sidemap-icon"></i>
                <p class="fs-6 fw-bold">Sitemap</p>
            </div>

            <div class="footer-sidemap d-none d-sm-flex">
                <div class="item">
                    <p class="fw-bold pb-3">Berita Kaltara</p>
                    <ul>
                        @foreach ($kategori_berita as $item)
                        <li><a href="{{url('berita')}}?kategori={{$item->nama}}">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="item">
                    <p class="fw-bold pb-3">Layanan Publik</p>
                    <ul>
                        @foreach ($kategori_layanan_publik as $item)
                        <li><a href="{{url('layanan-publik')}}?kategori={{$item->nama}}">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="item">
                    <p class="fw-bold pb-3">Dashboard Publik</p>
                    <ul>
                        @foreach ($dashboard_publik as $item)
                        <li><a href="{{$item->link}}" target="_blank">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="item">
                    <p class="fw-bold pb-3">Profil Kaltara</p>
                    <ul>
                        <li><a href="{{url('selayang-pandang')}}">Selayang Pandang</a></li>
                        <li><a href="{{url('tentang')}}">Tentang Kalimantan Utara</a></li>
                        <li><a href="{{url('arsip-dokumen')}}">Arsip dan Dokumen</a></li>
                        <li><a href="{{url('kalender-event')}}">Kalender Event</a></li>
                    </ul>
                </div>
                <div class="item">
                    <p class="fw-bold pb-3">PPID</p>
                    <ul>
                        @foreach ($ppid as $item)
                        <li><a href="{{$item->link}}" target="_blank">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="accordion d-block d-sm-none" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Berita Kaltara
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="footer-sidemap">
                            <div class="item">
                                <ul>
                                    <li><a href="">Ekonomi</a></li>
                                    <li><a href="">Kesehatan</a></li>
                                    <li><a href="">Pendidikan</a></li>
                                    <li><a href="">Pemerintahan</a></li>
                                    <li><a href="">Infrastruktur</a></li>
                                    <li><a href="">Social</a></li>
                                    <li><a href="">Teknologi</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Layanan Publik
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="footer-sidemap">
                            <div class="item">
                                <ul>
                                    <li><a href="">Kependudukan dan Tempat Tinggal</a></li>
                                    <li><a href="">Pendidikan dan Pembelajaran</a></li>
                                    <li><a href="">Kesehatan</a></li>
                                    <li><a href="">Sosial dan Keluarga</a></li>
                                    <li><a href="">Lingkungan</a></li>
                                    <li><a href="">Ekonomi, Bisnis dan Profesi</a></li>
                                    <li><a href="">Teknologi dan Komunikasi</a></li>
                                    <li><a href="">Sarana dan Prasarana</a></li>
                                    <li><a href="">Khusus</a></li>
                                    <li><a href="">PIKOBAR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Dashboard Publik
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="footer-sidemap">
                            <div class="item">
                                <ul>
                                    <li><a href="">Kependudukan dan Tempat Tinggal</a></li>
                                    <li><a href="">Pendidikan dan Pembelajaran</a></li>
                                    <li><a href="">Kesehatan</a></li>
                                    <li><a href="">Sosial dan Keluarga</a></li>
                                    <li><a href="">Lingkungan</a></li>
                                    <li><a href="">Ekonomi, Bisnis dan Profesi</a></li>
                                    <li><a href="">Teknologi dan Komunikasi</a></li>
                                    <li><a href="">Sarana dan Prasarana</a></li>
                                    <li><a href="">Khusus</a></li>
                                    <li><a href="">PIKOBAR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Profil Kaltara
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <div class="footer-sidemap">
                              <div class="item">
                                <ul>
                                    <li><a href="index.html">Selayang Pandang</a></li>
                                    <li><a href="about.html">Tentang Kalimantan Utara</a></li>
                                    <li><a href="document.html">Arsip dan Dokumen</a></li>
                                    <li><a href="">Jaringan Dokumentasi dan Informasi Hukum</a></li>
                                    <li><a href="">Layanan Pengadaan Secara Elektronik</a></li>
                                    <li><a href="">Sapawarga</a></li>
                                </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        PPID
                      </button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                          <div class="footer-sidemap">
                              <div class="item">
                                <ul>
                                    <li><a href="">Profil PPID</a></li>
                                    <li><a href="">Alur Layanan Informasi Publik</a></li>
                                    <li><a href="">Permohonan Informasi Publik</a></li>
                                    <li><a href="">Pengajuan Keberatan</a></li>
                                    <li><a href="">Informasi yang Wajib Tersedia Setiap Saat</a></li>
                                    <li><a href="">Informasi Publik Berkala</a></li>
                                    <li><a href="">Informasi Publik Serta Merta</a></li>
                                    <li><a href="">Tata Cara Penyelesaian Sengketa</a></li>
                                    <li><a href="">Tata Cara Pengaduan</a></li>
                                    <li><a href="">Daftar Informasi Dikecualikan</a></li>
                                </ul>
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>

    </div>
    <div class="container-fluid py-3 copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center text-sm-start">Copyright © 2023 Pemerintah Daerah Provinsi Kalimantan Utara. All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
