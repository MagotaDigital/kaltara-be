<nav class="navbar navbar-expand-lg bg-blue fixed-top container-fluid">
    <div class="container-lg container-fluid p-0 p-lg-2">
        <a class="navbar-brand ms-2 ms-lg-0" href="{{url('/')}}">
            <img src="https://kaltaraprov.go.id/source/assets/landing-css/img/icon/logopt.png" alt="Kalimantan Utara"
                width="220">
        </a>
        <button class="navbar-toggler me-2" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Navigasi Dekstop -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-top: -1px;">
            <ul class="navbar-nav ms-2 gap-3 me-auto mb-2 mb-lg-0 d-none d-lg-flex">
                <li class="nav-item">
                    <a class="d-flex align-items-center gap-2 cursor-pointer px-2 py-1 rounded-lg text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopberita" aria-controls="offcanvasTopberita" aria-current="page">
                        <span class="font-roboto text-xl fw-medium">Berita Kalimantan Utara</span>
                        <div aria-hidden="true" class="d-flex justify-content-center items-center">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center gap-2 cursor-pointer px-2 py-1 rounded-lg text-white"data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopLayanan" aria-controls="offcanvasTopLayanan" aria-current="page">
                        <span class="font-roboto text-xl fw-medium">Layanan Publik</span>
                        <div aria-hidden="true" class="d-flex justify-content-center items-center">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center gap-2 cursor-pointer px-2 py-1 rounded-lg text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopDashboard" aria-controls="offcanvasTopDashboard" aria-current="page">
                        <span class="font-roboto text-xl fw-medium">Dashboard Publik</span>
                        <div aria-hidden="true" class="d-flex justify-content-center items-center">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center gap-2 cursor-pointer px-2 py-1 rounded-lg text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopProfil" aria-controls="offcanvasTopProfil" aria-current="page">
                        <span  class="font-roboto text-xl fw-medium">Profil Kalimantan Utara</span>
                        <div aria-hidden="true" class="d-flex justify-content-center items-center">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center gap-2 cursor-pointer px-2 py-1 rounded-lg text-white" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTopPPID" aria-controls="offcanvasTopPPID" aria-current="page">
                        <span class="font-roboto text-xl fw-medium">PPID</span>
                        <div aria-hidden="true" class="d-flex justify-content-center items-center">
                            <i class="ri-arrow-down-s-line"></i>
                        </div>
                    </a>
                </li>
            </ul>
            <!-- Navigasi Mobilenya -->
            <ul class="navbar-nav bg-blue mb-2 mb-lg-0 d-block d-lg-none px-3 pt-5 border border-top-1"
                style="height: 100vh; width: 100%;">
                <li class="nav-item dropdown bg-green-primary mb-3">
                    <summary class="d-flex justify-content-between align-items-center cursor-pointer" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <h6 class="text-white">Berita Kalimantan Utara</h6 class="text-white">
                        <i class="ri-arrow-down-s-line text-white fs-3"></i>
                    </summary>
                    <ul class="dropdown-menu bg-blue ps-3 gap-2 border-0">
                        @foreach ($kategori_berita as $item)
                        <li class="mb-2"><a href="{{url('berita')}}?kategori={{$item->nama}}" class="text-white">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown bg-green-primary mb-3">
                    <summary class="d-flex justify-content-between align-items-center cursor-pointer" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <h6 class="text-white">Layanan Publik</h6 class="text-white">
                        <i class="ri-arrow-down-s-line text-white fs-3"></i>
                    </summary>
                    <ul class="dropdown-menu bg-blue ps-3 gap-2 border-0">
                        @foreach ($kategori_layanan_publik as $item)
                        <li class="mb-2"><a href="{{url('layanan-publik')}}?kategori={{$item->nama}}" class="text-white">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown bg-green-primary mb-3">
                    <summary class="d-flex justify-content-between align-items-center cursor-pointer" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <h6 class="text-white">Dashboard Publik</h6 class="text-white">
                        <i class="ri-arrow-down-s-line text-white fs-3"></i>
                    </summary>
                    <ul class="dropdown-menu bg-blue ps-3 gap-2 border-0">
                        @foreach ($dashboard_publik as $item)
                        <li class="mb-2"><a href="{{$item->link}}" target="_blank" class="text-white">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item dropdown bg-green-primary mb-3">
                    <summary class="d-flex justify-content-between align-items-center cursor-pointer" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <h6 class="text-white">Profil Kalimantan Utara</h6 class="text-white">
                        <i class="ri-arrow-down-s-line text-white fs-3"></i>
                    </summary>
                    <ul class="dropdown-menu bg-blue ps-3 gap-2 border-0">
                        <li class="mb-2"><a href="{{url('selayang-pandang')}}" class="text-white">Selayang Pandang</a></li>
                        <li class="mb-2"><a href="{{url('tentang')}}" class="text-white">Tentang Kalimantan Utara</a></li>
                        <li class="mb-2"><a href="{{url('arsip-dokumen')}}" class="text-white">Arsip dan Dokumen</a></li>
                        <li class="mb-2"><a href="{{url('kalender-event')}}" class="text-white">Kalender Event</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown bg-green-primary mb-3">
                    <summary class="d-flex justify-content-between align-items-center cursor-pointer" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <h6 class="text-white">PPID</h6 class="text-white">
                        <i class="ri-arrow-down-s-line text-white fs-3"></i>
                    </summary>
                    <ul class="dropdown-menu bg-blue ps-3 gap-2 border-0">
                        @foreach ($ppid as $item)
                        <li class="mb-2"><a href="{{$item->link}}" target="_blank" class="text-white">{{$item->nama}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>

        </div>
    </div>
</nav>
<div class="offcanvas navbar-item offcanvas-top" tabindex="-1" id="offcanvasTopberita" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-body">
        <section class="bg-blue pb-md-3 pt-md-5 position-absolute start-0 end-0 overflow-auto">
            <div class="container mx-auto position-relative">
                <!-- <img src="images/burung.png" alt="" class="position-absolute burung"> -->
                <div class="d-flex mx-auto align-align-items-start pt-2 pb-3 position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column gap-4 flex-grow-1">
                        <p class="text-white font-primary fs-3 leading-10">Berita Kalimantan Utara</p>
                        <div class="row g-0">
                            @foreach ($kategori_berita as $item)
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('berita')}}?kategori={{$item->nama}}" class="d-flex align-items-start">
                                    <img src="{{ asset('storage') }}/{{$item->gambar}}" alt="{{$item->nama}}" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">{{$item->nama}}</h2>
                                        <p>{{$item->deskripsi}}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="offcanvas navbar-item offcanvas-top" tabindex="-1" id="offcanvasTopLayanan" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-body">
    <section class="bg-blue pb-md-3 pt-md-5 position-absolute start-0 end-0 overflow-auto">
            <div class="container mx-auto position-relative">
                <!-- <img src="images/burung.png" alt="" class="position-absolute burung"> -->
                <div class="d-flex mx-auto align-align-items-start pt-2 pb-3 position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column gap-4 flex-grow-1">
                        <a href="/berita"class="text-white font-primary fs-3 leading-10">Layanan Publik</a>
                        <div class="row g-0">
                            @foreach ($kategori_layanan_publik as $item)
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('layanan-publik')}}?kategori={{$item->nama}}" class="d-flex align-items-start">
                                    <img src="{{ asset('storage') }}/{{$item->gambar}}" alt="{{$item->nama}}" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">{{$item->nama}}</h2>
                                        <p>{{$item->deskripsi}}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="offcanvas navbar-item offcanvas-top" tabindex="-1" id="offcanvasTopDashboard" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-body">
    <section class="bg-blue pb-md-3 pt-md-5 position-absolute start-0 end-0 overflow-auto">
            <div class="container mx-auto position-relative">
                <!-- <img src="images/burung.png" alt="" class="position-absolute burung"> -->
                <div class="d-flex mx-auto align-align-items-start pt-2 pb-3 position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column gap-4 flex-grow-1">
                        <a href=""class="text-white font-primary fs-3 leading-10">Dashboard Publik</a>
                        <div class="row g-0">
                            @foreach ($dashboard_publik as $item)
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{$item->link}}" target="_blank" class="d-flex align-items-start">
                                    <img src="{{ asset('storage') }}/{{$item->gambar}}" alt="{{$item->nama}}" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">{{$item->nama}}</h2>
                                        <p>{{$item->deskripsi}}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="offcanvas navbar-item offcanvas-top" tabindex="-1" id="offcanvasTopProfil" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-body">
    <section class="bg-blue pb-md-3 pt-md-5 position-absolute start-0 end-0 overflow-auto">
            <div class="container mx-auto position-relative">
                <!-- <img src="images/burung.png" alt="" class="position-absolute burung"> -->
                <div class="d-flex mx-auto align-align-items-start pt-2 pb-3 position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column gap-4 flex-grow-1">
                        <a href="/berita"class="text-white font-primary fs-3 leading-10">Profil Kalimantan Utara</a>
                        <div class="row g-0">
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('selayang-pandang')}}" class="d-flex align-items-start">
                                    <img src="{{ asset('template-user/icon/selayang-pandang.svg') }}" alt="Selayang Pandang" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">Selayang Pandang</h2>
                                        <p>Kilas perjalanan kalimantan Utara menuju Kaltara Juara Lahir Batin</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('tentang')}}" class="d-flex align-items-start">
                                    <img src="{{ asset('template-user/icon/informasi.svg') }}" alt="Ekonomi" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">Tentang Kalimantan Utara</h2>
                                        <p>Cari tahu sejarah, pimpinan, dan pemerintahan Kalimantan Utara selengkapnya</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('arsip-dokumen')}}" class="d-flex align-items-start">
                                    <img src="{{ asset('template-user/icon/arsip-dan-dokumen.svg') }}" alt="Arsip dan Dokumen" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">Arsip dan Dokumen</h2>
                                        <p>Akses dan unduh dokumen resmi yang dirilis pemerintah Kalimantan Utara</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{url('kalender-event')}}" class="d-flex align-items-start">
                                    <img src="{{ asset('template-user/icon/informasi.svg') }}" alt="Kalender-event" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">Kalender Event</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="offcanvas navbar-item offcanvas-top" tabindex="-1" id="offcanvasTopPPID" aria-labelledby="offcanvasTopLabel">
    <div class="offcanvas-body">
    <section class="bg-blue pb-md-3 pt-md-5 position-absolute start-0 end-0 overflow-auto">
            <div class="container mx-auto position-relative">
                <!-- <img src="images/burung.png" alt="" class="position-absolute burung"> -->
                <div class="d-flex mx-auto align-align-items-start pt-2 pb-3 position-relative" style="z-index: 2;">
                    <div class="d-flex flex-column gap-4 flex-grow-1">
                        <a href="/berita"class="text-white font-primary fs-3 leading-10">PPID</a>
                        <div class="row g-0">
                            @foreach ($ppid as $item)
                            <div class="col-4 text-white pb-md-3">
                                <a href="{{$item->link}}" target="_blank" class="d-flex align-items-start">
                                    <img src="{{ asset('storage') }}/{{$item->gambar}}" alt="{{$item->nama}}" class="mt-1 icon">
                                    <div class="ms-3 text-white">
                                        <h2 class="fs-5 mb-1">{{$item->nama}}</h2>
                                        <p>{{$item->deskripsi}}</p>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
            </div>
        </section>
    </div>
</div>
