@extends('layout/v_template')

@section('content')
<main>
    <section class="position-relative w-100 mt-md-5 mt-3"
        style="min-height: 422px; background-size: cover; background-repeat: no-repeat; background-position: center; background-image: radial-gradient(56.33% 56.33% at 50.59% 43.67%, rgba(0, 23, 28, 0.5) 0%, rgba(0, 11, 14, 0.7) 46.15%, rgba(0, 11, 14, 0.82) 100%), url({{asset('storage')}}/{{$berita->gambar}});">

        <div class="container-fluid position-absolute bottom-0 start-0 mb-md-5 mb-3 px-md-5 px-3" style="z-index: 10;">
            <h1 class="font-lora fw-bold text-white mb-3">
                {{ $berita->judul }}
            </h1>

            <div class="row g-0 text-white">
                <div class="d-flex align-items-center mb-2 col-md-12">
                    <img src="{{ asset('template-user/icon/calendar.svg')}}" alt="Diterbitkan" width="16px"
                        height="16px">
                    <p class="ms-2">
                        {{ Carbon\Carbon::parse($berita->tanggal_rilis)->format('l, d F Y') }}
                    </p>
                </div>
                <div class="d-flex align-items-center col-md-12 mb-3">
                    <img src="{{ asset('template-user/icon/pen.svg')}}" alt="Penulis" width="16px" height="16px">
                    <div class="d-flex w-100 flex-wrap align-items-center ms-2">
                        <p class="">
                            Penulis : {{ $berita->penulis }}
                        </p>
                        <div class="mx-2"> | </div>
                        <p class="d-flex line-clamp-1 align-items-center">
                            Peliput : {{ $berita->peliput }}
                        </p>
                    </div>
                </div>
            </div>

            <div class="row g-0 text-white">
                <div class="col-md-6 d-flex align-items-start mb-md-0 mb-3">
                    <div class="d-flex">
                        <div class="border rounded rounded-circle border-white d-flex justify-content-center align-items-center"
                            style="width: 28px; height: 28px; background-color: rgba(0,0,0,0.3)">
                            <div class="d-flex justify-content-center align-items-center"
                                style="width: 12px; height: 12px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 12px; height: 12px; transform: rotate(0deg); fill: white;">
                                        <path
                                            d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                        </path>
                                        <path
                                            d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="ms-2">
                            <p>{{ ($berita->view != null) ? $berita->view : '0' }} kali</p>
                            <p>
                                Berita ini dilihat
                            </p>
                        </div>
                    </div>

                    <div class="d-flex ms-3">
                        <div class="border rounded rounded-circle border-white d-flex justify-content-center align-items-center"
                            style="width: 28px; height: 28px; background-color: rgba(0,0,0,0.3)">
                            <div class="d-flex justify-content-center align-items-center"
                                style="width: 12px; height: 12px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="white"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 12px; height: 12px; transform: rotate(0deg); fill: white;">
                                        <path
                                            d="M1 10C1 11.654 2.346 13 4 13C4.794 13 5.512 12.685 6.049 12.18L12.04 15.604C12.022 15.734 12 15.864 12 16C12 17.654 13.346 19 15 19C16.654 19 18 17.654 18 16C18 14.346 16.654 13 15 13C14.206 13 13.488 13.315 12.951 13.82L6.96 10.397C6.978 10.266 7 10.136 7 10C7 9.864 6.978 9.734 6.96 9.603L12.951 6.18C13.488 6.685 14.206 7 15 7C16.654 7 18 5.654 18 4C18 2.346 16.654 1 15 1C13.346 1 12 2.346 12 4C12 4.136 12.022 4.266 12.04 4.397L6.049 7.82C5.496 7.29468 4.76273 7.00123 4 7C2.346 7 1 8.346 1 10Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                        </div>
                        <div class="ms-2">
                            <p>{{ ($berita->share != null) ? $berita->share : '0' }} kali</p>
                            <p>
                                Berita ini dibagikan
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    class="col-md-6 d-flex align-items-md-end justify-content-md-end justify-content-start align-items-center">
                    <button class="d-flex justify-content-between align-items-center btn btn-fill py-2"
                        style="width: fit-content;">
                        Bagikan Berita
                        <div class="d-flex justify-content-center align-items-center ms-2"
                            style="width: 16px; height: 16px;">
                            <i>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="white"
                                    xmlns="http://www.w3.org/20" style=" width: 16px; height: 16px; transform: rotate(0deg); fill:
                                        white;">
                                    <path
                                        d="M1 10C1 11.654 2.346 13 4 13C4.794 13 5.512 12.685 6.049 12.18L12.04 15.604C12.022 15.734 12 15.864 12 16C12 17.654 13.346 19 15 19C16.654 19 18 17.654 18 16C18 14.346 16.654 13 15 13C14.206 13 13.488 13.315 12.951 13.82L6.96 10.397C6.978 10.266 7 10.136 7 10C7 9.864 6.978 9.734 6.96 9.603L12.951 6.18C13.488 6.685 14.206 7 15 7C16.654 7 18 5.654 18 4C18 2.346 16.654 1 15 1C13.346 1 12 2.346 12 4C12 4.136 12.022 4.266 12.04 4.397L6.049 7.82C5.496 7.29468 4.76273 7.00123 4 7C2.346 7 1 8.346 1 10Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                    </button>
                </div>

            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row g-0 my-md-5 my-3">
                <div class="col-12 col-md-8">
                    <p class="mb-md-4 mb-3">
                        <img src="{{asset('storage')}}/{{$berita->gambar}}"
                            class="img-fluid">
                    </p>
                    <div>
                        {!! $berita->konten !!}
                    </div>
                    <p><span class="fw-bold">Editor :</span> {{$berita->penulis}}</p>
                </div>
                <div class="col-12 col-md-4 ps-md-4 ps-0">
                    <div class="sticky-top" style="top:15%">
                        <div class="row g-0">
                            <div class="col-md-12 d-flex w-100 mb-1" style="height: 38px;">
                                <div style="border-bottom: 3px solid #2980b9;">
                                    <p class="font-lato fw-bold text-blue"
                                        style="white-space: nowrap;font-size: 0.875rem;">
                                        BERITA TERKAIT</p>
                                </div>
                                <div class="w-100 h-100" style="border-bottom: 3px solid rgb(222, 222, 222);"></div>
                            </div>
                            @foreach ($berita_terbaru as $item)
                            <div class="col-md-12 mt-3">
                                <div class="w-100 gap-3 mt-2">
                                    <article class="d-flex list-card duration-250 p-2 rounded list-type gap-2"
                                        style="min-height: 88px;">
                                        <div class="flex-shrink-0 overflow-hidden rounded"
                                            style="height: 72px; width: 72px;">
                                            <a href="{{url('berita')}}/{{$item->slug}}"
                                                class="">
                                                <img src="{{asset('storage')}}/{{$item->gambar}}"
                                                    width="72" height="72"
                                                    alt="Perekonomian Jabar 2024 Masih Bakal Tumbuh Positif  "
                                                    class="lazy-img w-100 h-100 d-block"
                                                    style="object-fit: cover; object-position: center;"
                                                    data-src="{{asset('storage')}}/{{$item->gambar}}"
                                                    lazy="loaded"></a>
                                        </div>
                                        <div class="w-100 d-flex flex-column align-items-start justify-content-center">
                                            <a href="{{url('berita')}}/{{$item->slug}}"
                                                class="">
                                                <h6 class="font-lato fw-normal line-clamp-2" style="font-size: 1rem;">
                                                    {{$item->judul}}
                                                </h6>
                                            </a>
                                            <p class="fw-normal" style="font-size: 0.75rem;">
                                                <span>{{$item->kategori}}</span> | {{ Carbon\Carbon::parse($item->tanggal_rilis)->format('l, d F Y') }}
                                            </p>
                                        </div>
                                    </article>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
    </section>
</main>

@endsection
