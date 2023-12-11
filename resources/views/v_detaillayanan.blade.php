@extends('layout/v_template')

@section('content')
    <section id="hero-top-50"
        style="background: url('https://images.unsplash.com/photo-1646432581107-06cd4333cfde?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-cover">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                        <li class="breadcrumb-item">{{ $layanan_publik->kategori }}</li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $layanan_publik->nama }}</li>

                    </ol>
                </nav>
                <div class="hero-desc">
                    <p class="fs-3 font-title">{{ $layanan_publik->nama }}</p>
                    <p class="font-primary">{{ $layanan_publik->deskripsi_singkat }}</p>
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
                                @php
                                    $gambarArray = json_decode($layanan_publik->gambar, true);
                                @endphp

                                @if (is_array($gambarArray))
                                    @foreach ($gambarArray as $image)
                                        <div class="swiper-slide">
                                            <img class="rounded" src="{{ asset('storage') }}/{{ trim($image) }}" alt="image" style="height: 353px; object-fit: cover;">
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                <!-- TAB KEDUA -->
                <div id="desc">
                    <p class="font-title fs-3 text-blue fw-bold pb-3 pt-5">Deskripsi</p>
                    <div class="mt-3">
                        <ul class="d-flex justify-items-center gap-4 w-100" style="list-style: none;">
                            <li class="p-4 rounded w-100">
                                <div class="row w-100 h-100">
                                    <div class="col-1">
                                        <svg height="10" width="10">
                                            <circle cx="5" cy="5" r="5" fill="#4DC27E"></circle>
                                        </svg>
                                    </div>
                                    <div class="col-11">
                                        <p class="w-100 font-lato text-left ">
                                            {!! $layanan_publik->deskripsi !!}
                                        </p>
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
