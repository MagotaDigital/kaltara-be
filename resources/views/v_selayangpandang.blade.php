@extends('layout/v_template')

@section('content')

<section id="hero-top-50" style="background: url('https://images.unsplash.com/photo-1646432581107-06cd4333cfde?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-cover">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Selayang Pandang</li>
                    </ol>
                </nav>
                <div class="hero-desc">
                    <p class="fs-3 font-title">Selayang Pandang </p>
                    <p class="font-primary">Ketahui segalanya tentang Jawa Barat mulai dari pemerintahan, program, hingga kondisi terkini.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content" class="container mb-5">
        <div class="box p-3 p-sm-5">
            <div class="row justify-content-between py-3">
                <div class="col-md-5">
                    <p class="fs-2 fw-bold font-title mb-3 lh-130 text-center text-sm-start">Provinsi Kalimantan Utara Dengan Segala Pesonanya</p>
                    <p class="font-primary mb-5 text-center text-sm-start">Jelajahi pesona Kalimantan Utara mulai dari kekayaan alam, budaya khas hingga tradisi yang tak lekang oleh waktu.</p>
                    <a href="" class="btn-fill-white font-primary fw-semibold d-flex justify-content-between d-sm-inline-block">Lihat videonya disini <i class="ri-share-box-line"></i></a>
                </div>
                <div class="col-md-6 position-relative img-item d-none d-sm-block">
                    <div class="img-wrapper">
                        <img src="https://images.unsplash.com/photo-1510455415134-1cff57e0522a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                    </div>

                    <svg class="position-absolute svg-1" width="134" height="135" viewBox="0 0 134 135" fill="none" xmlns="http://www.w3.org/2000/svg"><rect x="0.5" width="133" height="135" rx="16" fill="#2470a2"></rect></svg>

                    <svg class="position-absolute svg-2" width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M36.5 18C36.5 27.9411 28.4411 36 18.5 36C8.55887 36 0.5 27.9411 0.5 18C0.5 8.05887 8.55887 0 18.5 0C28.4411 0 36.5 8.05887 36.5 18ZM9.73248 18C9.73248 22.8422 13.6578 26.7675 18.5 26.7675C23.3422 26.7675 27.2675 22.8422 27.2675 18C27.2675 13.1578 23.3422 9.23248 18.5 9.23248C13.6578 9.23248 9.73248 13.1578 9.73248 18Z" fill="#FFB900"></path></svg>

                    <svg class="position-absolute svg-3" width="184" height="184" viewBox="0 0 184 184" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.5 183.5C0.500004 134.833 19.833 88.1588 54.2459 53.7459C88.6588 19.333 135.333 -5.80351e-07 184 0V58.526C150.855 58.526 119.067 71.6929 95.63 95.13C72.1929 118.567 59.026 150.355 59.026 183.5H0.5Z" fill="#2470a2"></path></svg>
                </div>
            </div>
        </div>
        <div class="row py-5 justify-content-between align-items-center">
            <div class="col-md-4">
                <div class="font-title">
                    <p class="fs-5 fw-semibold text-center text-sm-start" style="color: #78909C;">Provinsi Kalimantan Utara</p>
                    <p class="fs-2 fw-bold text-center text-sm-start">Juara Lahir Batin</p>
                </div>
            </div>
            <div class="col-md-6">
                <p class="font-primary text-center text-sm-start">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae inventore ab, rerum nemo quisquam eius nihil. Saepe fugiat, mollitia eaque beatae similique quasi ad soluta dolores quas inventore. Alias atque saepe dignissimos commodi deserunt. Amet quisquam nam incidunt nostrum id, autem recusandae deleniti provident molestias minus enim temporibus fuga!</p>
            </div>
        </div>

        <!-- Swiper -->
        <div class="regular-slider">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach($penghargaan as $item)
                    <div class="swiper-slide font-primary p-3">
                        <i class="ri-trophy-fill"></i>
                        <p class="fw-bold fs-5">{{$item->nama}}</p>
                        <span class="mb-3 d-block">{{$item->kategori}}</span>
                        <p class="lh-120">{{$item->deskripsi}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="d-block d-sm-none row position-relative py-5 mx-1">
            <div class="col-md-12">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center">
            <a href="" class="btn-bordered d-flex justify-content-between align-items-center d-sm-inline-block mt-4 font-primary">Lihat Semua Penghargaan Provinsi Kalimantan Utara <i class="ri-share-box-line"></i></a>
        </div> --}}

        <div class="row priority mt-5 p-4 g-3">
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-first-aid-kit-line"></i>
                    <p class="font-primary">Reformasi Sistem Kesehatan</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-rocket-2-fill"></i>
                    <p class="font-primary">Pemulihan dan Pertumbuhan Ekonomi Kerakyatan Berbasis Inovasi</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-seedling-fill"></i>
                    <p class="font-primary">Penguatan Sistem Ketahanan Pangan Berkelanjutan</p>
                </div>
            </div>
            <div class="col-md-3 d-flex flex-column justify-content-center title">
                <p class="text-center text-sm-end font-title fs-3 fw-bold">11 Prioritas</p>
                <p class="text-center text-sm-end font-primary lh-120 fw-semibold" style="color: #415c84;">Pembangunan Kalimantan Utara pada Tahun 2022</p>
            </div>

            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-group-fill"></i>
                    <p class="font-primary">Reformasi Sistem Perlindungan Sosial</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-graduation-cap-fill"></i>
                    <p class="font-primary">Reformasi Sistem Pendidikan dan Pemajuan Kebudayaan</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-landscape-fill"></i>
                    <p class="font-primary">Reformasi Sistem Kesiapsiagaan Penanggulangan Resiko Bencana</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-account-pin-box-fill"></i>
                    <p class="font-primary">Inovasi Pelayanan Publik dan Penataan Daerah</p>
                </div>
            </div>

            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-building-2-fill"></i>
                    <p class="font-primary">Gerakan Membangun Desa</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-ancient-gate-fill"></i>
                    <p class="font-primary">Pendidikan Agama dan Tempat Ibadah Juara</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-settings-2-fill"></i>
                    <p class="font-primary">Pengembangan Infrastruktur Konektivitas Wilayah dan Pengelolaan Lingkungan Hidup</p>
                </div>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="squere-item">
                    <i class="ri-haze-fill"></i>
                    <p class="font-primary">Pengembangan Destinasi dan Infrastruktur Pariwisata</p>
                </div>
            </div>

            <!-- Mobile View Item Priority -->
            <div class="swiper mySwiperPriority d-block d-sm-none">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col-md-3">
                            <div class="squere-item">
                                <i class="ri-first-aid-kit-line"></i>
                                <p class="font-primary">Reformasi Sistem Kesehatan</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-md-3">
                            <div class="squere-item">
                                <i class="ri-rocket-2-fill"></i>
                                <p class="font-primary">Pemulihan dan Pertumbuhan Ekonomi Kerakyatan Berbasis Inovasi</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col-md-3">
                            <div class="squere-item">
                                <i class="ri-seedling-fill"></i>
                                <p class="font-primary">Penguatan Sistem Ketahanan Pangan Berkelanjutan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-none row position-relative py-5 mx-1">
                <div class="col-md-12">
                    <div class="swiper-pagination2"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4">
                <div class="contribution px-3 py-5">
                    <span class="font-title">Kontribusi</span>
                    <p class="font-title fs-4 fw-semibold">Provinsi Kalimantan Utara</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores magni pariatur illo eaque dolor quod voluptatibus, ipsam adipisci laudantium tempore.
                        <br>Sumber data: (Google[dot]com, 2023)
                    </p>
                    <a href="" class="btn-fill-white font-primary fw-semibold mt-5 d-flex justify-content-between p-2">Lihat Laporan Perkembangan Kaltara <i class="ri-share-box-line"></i></a>
                </div>
            </div>
            <div class="col-md-8 d-none d-sm-block">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="contri-item p-3">
                            <div class="header font-primary">
                                <i class="ri-building-line"></i>
                                <p class="fw-bold fs-5">14.33%</p>
                            </div>
                            <p class="lh-120 font-primary">Kontribusi terhadap Produk Domestik Bruto (PDB) Nasional.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contri-item p-3">
                            <div class="header font-primary">
                                <i class="ri-building-line"></i>
                                <p class="fw-bold fs-5">60%</p>
                            </div>
                            <p class="lh-120 font-primary">Kontribusi terhadap Produk Domestik Bruto (PDB) Sektor Industri Manufaktur.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contri-item p-3">
                            <div class="header font-primary">
                                <i class="ri-building-line"></i>
                                <p class="fw-bold fs-5">34.46%</p>
                            </div>
                            <p class="lh-120 font-primary">Kontribusi Penanaman Modal Asing (PMA) Jawa Barat terhadap Nasional.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contri-item p-3">
                            <div class="header font-primary">
                                <i class="ri-building-line"></i>
                                <p class="fw-bold fs-5">17.76%</p>
                            </div>
                            <p class="lh-120 font-primary">Produsen Beras Nasional.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="contri-item p-3">
                            <div class="header font-primary">
                                <i class="ri-building-line"></i>
                                <p class="fw-bold fs-5">34.46%</p>
                            </div>
                            <p class="lh-120 font-primary">Kontribusi Penanaman Modal Asing (PMA) Jawa Barat terhadap Nasional.</p>
                        </div>
                    </div>
                </div>
            </div>

             <!-- Mobile View Item Priority -->
            <div class="col-md-8 d-block d-sm-none mt-3">
                <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="col-md-4">
                                <div class="contri-item p-3">
                                    <div class="header font-primary">
                                        <i class="ri-building-line"></i>
                                        <p class="fw-bold fs-5">14.33%</p>
                                    </div>
                                    <p class="lh-120 font-primary">Kontribusi terhadap Produk Domestik Bruto (PDB) Nasional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-md-4">
                                <div class="contri-item p-3">
                                    <div class="header font-primary">
                                        <i class="ri-building-line"></i>
                                        <p class="fw-bold fs-5">60%</p>
                                    </div>
                                    <p class="lh-120 font-primary">Kontribusi terhadap Produk Domestik Bruto (PDB) Sektor Industri Manufaktur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-md-4">
                                <div class="contri-item p-3">
                                    <div class="header font-primary">
                                        <i class="ri-building-line"></i>
                                        <p class="fw-bold fs-5">34.46%</p>
                                    </div>
                                    <p class="lh-120 font-primary">Kontribusi Penanaman Modal Asing (PMA) Jawa Barat terhadap Nasional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-md-4">
                                <div class="contri-item p-3">
                                    <div class="header font-primary">
                                        <i class="ri-building-line"></i>
                                        <p class="fw-bold fs-5">34.46%</p>
                                    </div>
                                    <p class="lh-120 font-primary">Kontribusi Penanaman Modal Asing (PMA) Jawa Barat terhadap Nasional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="col-md-4">
                                <div class="contri-item p-3">
                                    <div class="header font-primary">
                                        <i class="ri-building-line"></i>
                                        <p class="fw-bold fs-5">34.46%</p>
                                    </div>
                                    <p class="lh-120 font-primary">Kontribusi Penanaman Modal Asing (PMA) Jawa Barat terhadap Nasional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-block d-sm-none row position-relative py-5 mx-1">
                        <div class="col-md-12">
                            <div class="swiper-pagination3"></div>
                            <div class="swiper-button-next swiper-button-next3"></div>
                            <div class="swiper-button-prev swiper-button-prev3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

@endsection
