@extends('layout/v_template')

@section('content')
    <section id="hero-top-50"
        style="background: url('https://images.unsplash.com/photo-1646432581107-06cd4333cfde?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-cover">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="#">Kependudukan dan Tempat Tinggal</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sistem Informasi Data Kependudukan
                            (SIDATUK)</li>

                    </ol>
                </nav>
                <div class="hero-desc">
                    <p class="fs-3 font-title">Sistem Informasi Data Kependudukan (SIDATUK)</p>
                    <p class="font-primary">Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                        aduan data administrasi kependudukan secara digital</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content-about" class="container mb-5">
        <div class="row">
            <aside class="p-3 font-primary col-md-3">
                <nav class="nav flex-column">
                    <p class="fw-bold">Konten Layanan</p>
                    <a class="nav-link" href="DetailLayanan.html#info" type="button">Infografis</a>

                    <a class="nav-link" href="DetailLayanan.html#desc" type="button">Deskripsi</a>
                </nav>
            </aside>
            <div class="col-md-9 ps-4" id="v-pills-tabContent">
                <!-- TAB PERTAMA -->
                <div id='info'>
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Infografis</p>
                    <div class="mt-3">
                        <div class="swiper mySwiperInfografis">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img class="rounded"
                                        src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        alt="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        style="height: 353px; object-fit: cover;">
                                </div>
                                <div class="swiper-slide">
                                    <img class="rounded"
                                        src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        alt="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        style="height: 353px; object-fit: cover;">
                                </div>
                                <div class="swiper-slide">
                                    <img class="rounded"
                                        src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        alt="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        style="height: 353px; object-fit: cover;">
                                </div>
                                <div class="swiper-slide">
                                    <img class="rounded"
                                        src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        alt="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        style="height: 353px; object-fit: cover;">
                                </div>
                                <div class="swiper-slide">
                                    <img class="rounded"
                                        src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        alt="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690286280-Nama-Resize.jpg"
                                        style="height: 353px; object-fit: cover;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- TAB KEDUA -->
                <div id="desc">
                    <p class="font-title fs-3 text-blue fw-bold pb-3 pt-5">Deskripsi</p>
                    <div class="mt-3">
                        <ul class="d-flex justify-items-center gap-4 w-100" style="list-style: none;">
                            <li class="bg-[#F9FAFB] p-4 rounded-xl w-100">
                                <div class="row w-100 h-100">
                                    <div class="col-1">
                                        <svg height="10" width="10" class="min-w-[10px] mt-[7px]">
                                            <circle cx="5" cy="5" r="5" fill="#4DC27E"></circle>
                                        </svg>
                                    </div>
                                    <div class="col-11">
                                        <p class="w-100 font-lato text-left text-blue-gray-900"><span
                                                class="font-normal leading-[23px] text-sm ">
                                                Validasi data kependudukan berdasarkan kriteria permasalahan tertentu
                                            </span> <span class="font-normal leading-[23px] text-sm"
                                                style="display:none;"></span></p>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
