@extends('layout/v_template')

@section('content')

<div class="position-relative">
    <div style="height: 740px;">
        <div class="w-100 h-100 position-absolute"
            style="top:0; background-position: center; background-repeat: no-repeat; background-size: cover; background-image: radial-gradient(100% 820.78% at 0% 0%, rgba(0, 40, 19, 0.9) 0%, rgba(0, 32, 39, 0.7) 61.62%), url('images/banners/1.webp');">
        </div>
    </div>
    <section class="d-flex justify-content-center align-items-center w-100 position-absolute"
        style="min-height: 740px; top: 0;">
        <div class=" mx-auto px-3">
            <div class="d-flex flex-column align-items-center py-3"
                style="background-image:url('/images/hero.svg'); background-position:center; background-size:contain;">
                <h1 class="text-white text-center fw-bold font-intro">
                    Menjawab Kebutuhan Informasi
                </h1>
                <h2 class="text-white text-center fw-bold font-intro">
                    Publik Warga Kalimantan Utara
                </h2>
                <p class="text-white fw-medium text-center mb-4">
                    Temukan informasi publik terkini dari Pemerintah Daerah Provinsi Kalimantan Utara
                </p>
                <div class="section-hero w-100">
                    <div class="position-relative mb-4">
                        <form
                            class="position-relative d-flex align-items-center gap-2 rounded bg-white w-100 form-hero mx-auto"
                            style="padding: 6px 9px;">
                            <div class="d-flex justify-content-center align-items-center text-black-50"
                                style="width:16px;height:16px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.o" style="width: 16px; height: 16px; transform: rotate(0deg); fill:
                                            currentcolor;">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1841 15.0024C11.9231 15.9004 10.3804 16.4286 8.71429 16.4286C4.4538 16.4286 1 12.9748 1 8.71429C1 4.4538 4.4538 1 8.71429 1C12.9748 1 16.4286 4.4538 16.4286 8.71429C16.4286 10.3804 15.9004 11.9231 15.0024 13.1841L18.6234 16.8051C19.1255 17.3073 19.1255 18.1213 18.6234 18.6234C18.1213 19.1255 17.3073 19.1255 16.8051 18.6234L13.1841 15.0024ZM13.8571 8.71429C13.8571 11.5546 11.5546 13.8571 8.71429 13.8571C5.87396 13.8571 3.57143 11.5546 3.57143 8.71429C3.57143 5.87396 5.87396 3.57143 8.71429 3.57143C11.5546 3.57143 13.8571 5.87396 13.8571 8.71429Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                            <input type="text" aria-label="Kolom Pencarian" class="w-100 flex-grow-0 input-hero"
                                value="" style="border: none; min-width: 0;">
                            <button class="d-flex justify-content-between btn btn-sm btn-fill rounded text-white"
                                style="padding: 9px 16px;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class=" ms-n1 text-white" style="display:none;">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                        class="opacity-25"></circle>
                                    <path fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                        class="opacity-75"></path>
                                </svg>
                                Cari
                            </button>
                        </form>
                    </div>


                </div>

                <div class="w-100" style="max-width: 36rem;">
                    <div class="frame-button-kritik">
                        <div class="position-relative rotate-90">
                            <button type="button"
                                class="mt-1 mt-md-4 w-100 d-flex justify-content-center align-items-center gap-2 py-2 ps-1 pe-1 btn btn-sm btn-secondary bg-secondary bg-opacity-10"
                                data-bs-toggle="modal" data-bs-target="#exampleModal" style="width: fit-content;">
                                <span aria-hidden="true"
                                    style="mask-image:url({{asset('template-user/icon/feedback.svg')}});mask-repeat:no-repeat;mask-size:100% 100%;-webkit-mask-image:url({{asset('template-user/icon/feedback.svg')}});-webkit-mask-repeat:no-repeat;-webkit-mask-size:100% 100%;background-color:white;height:20px;width:20px;display:inline-block;"></span>
                                <div class="text-white">
                                    Kritik dan Saran
                                </div>
                            </button>
                        </div>
                    </div>
                </div>

                <ul class="d-flex w-100 frame-social-media mt-4 justify-content-between justify-content-md-center gap-2 flex-md-column"
                    style="max-width: 36rem; list-style: none;">
                    <li class="bg-white bg-opacity-10 rounded">
                        <a href="https://www.facebook.com/jabarprov" target="_blank" rel="noreferrer"
                            aria-label="Facebook" class="d-flex justify-content-center align-items-center p-3">
                            <div aria-hidden="true" class="d-flex justify-content-center align-items-center text-white"
                                style="width:18px;height:18px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M17.3635 1.00006H2.63618C1.73209 1.00006 0.999817 1.73233 0.999817 2.63642V17.3637C0.999817 18.2678 1.73209 19.0001 2.63618 19.0001H10.818V11.6364H8.36345V9.18188H10.818V7.86379C10.818 5.36833 12.0338 4.27279 14.1079 4.27279C15.1012 4.27279 15.6265 4.34642 15.8752 4.37997V6.72733H14.4605C13.5802 6.72733 13.2725 7.19206 13.2725 8.13297V9.18188H15.8531L15.5029 11.6364H13.2725V19.0001H17.3635C18.2675 19.0001 18.9998 18.2678 18.9998 17.3637V2.63642C18.9998 1.73233 18.2667 1.00006 17.3635 1.00006Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                        </a>
                    </li>

                    <li class="bg-white bg-opacity-10 rounded">
                        <a href="https://www.instagram.com/jabarprovgoid" target="_blank" rel="noreferrer"
                            aria-label="Instagram" class="d-flex justify-content-center align-items-center p-3">
                            <div aria-hidden="true" class="d-flex justify-content-center align-items-center text-white"
                                style="width:18px;height:18px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M6 1C3.239 1 1 3.239 1 6V14C1 16.761 3.239 19 6 19H14C16.761 19 19 16.761 19 14V6C19 3.239 16.761 1 14 1H6ZM16 3C16.552 3 17 3.448 17 4C17 4.552 16.552 5 16 5C15.448 5 15 4.552 15 4C15 3.448 15.448 3 16 3ZM10 5C12.761 5 15 7.239 15 10C15 12.761 12.761 15 10 15C7.239 15 5 12.761 5 10C5 7.239 7.239 5 10 5ZM10 7C9.20435 7 8.44129 7.31607 7.87868 7.87868C7.31607 8.44129 7 9.20435 7 10C7 10.7957 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7957 13 10C13 9.20435 12.6839 8.44129 12.1213 7.87868C11.5587 7.31607 10.7956 7 10 7Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                        </a>
                    </li>

                    <li class="bg-white bg-opacity-10 rounded">
                        <a href="https://twitter.com/jabarprovgoid" target="_blank" rel="noreferrer"
                            aria-label="Twitter" class="d-flex justify-content-center align-items-center p-3">
                            <div aria-hidden="true" class="d-flex justify-content-center align-items-center text-white"
                                style="width:18px;height:18px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <g clip-path="url(#clip0)">
                                            <path
                                                d="M20.92 4.0101C20.1512 4.35362 19.3244 4.58283 18.4522 4.69128C19.3389 4.16017 20.0211 3.3131 20.3413 2.31245C19.5115 2.8031 18.5923 3.16362 17.6143 3.35355C16.8334 2.51821 15.7195 2 14.4853 2C12.1146 2 10.193 3.92159 10.193 6.29103C10.193 6.62634 10.2319 6.95286 10.3051 7.27C6.73858 7.08945 3.57527 5.3789 1.45904 2.78317C1.08716 3.41745 0.877978 4.16017 0.877978 4.94393C0.877978 6.43348 1.63394 7.74483 2.78677 8.51745C2.0831 8.49576 1.42069 8.29821 0.84079 7.98166C0.84079 7.99455 0.84079 8.0139 0.84079 8.03207C0.84079 10.1137 2.32076 11.8471 4.28242 12.2416C3.92391 12.3407 3.54506 12.3958 3.15458 12.3958C2.87741 12.3958 2.60722 12.3641 2.34574 12.3167C2.89194 14.0178 4.4765 15.2612 6.35391 15.2981C4.88499 16.4471 3.03488 17.1353 1.02324 17.1353C0.675768 17.1353 0.335847 17.1153 -7.62939e-06 17.0743C1.90065 18.2883 4.1575 19 6.57995 19C14.4737 19 18.7921 12.4603 18.7921 6.78697C18.7921 6.60114 18.7863 6.4159 18.7776 6.233C19.6202 5.63272 20.3465 4.87534 20.92 4.0101Z">
                                            </path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0">
                                                <rect width="20" height="20"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </i>
                            </div>
                        </a>
                    </li>

                    <li class="bg-white bg-opacity-10 rounded">
                        <a href="https://www.youtube.com/channel/UCiDN1p49p87vtkhMC5BhdXA" target="_blank"
                            rel="noreferrer" aria-label="YouTube"
                            class="d-flex justify-content-center align-items-center p-3">
                            <div aria-hidden="true" class="d-flex justify-content-center align-items-center text-white"
                                style="width:18px;height:18px;">
                                <i>
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.89777 12.5828V6.98919L13.2754 9.79596L7.89777 12.5828V12.5828ZM19.7071 6.02076C19.7071 6.02076 19.513 4.64823 18.9158 4.04408C18.1594 3.25181 17.3104 3.24783 16.9212 3.20105C14.1364 3 9.95706 3 9.95706 3H9.9491C9.9491 3 5.77079 3 2.98493 3.20105C2.59576 3.24783 1.74776 3.25082 0.990331 4.04408C0.393146 4.64823 0.199062 6.02076 0.199062 6.02076C0.199062 6.02076 0 7.63117 0 9.24257V10.7525C0 12.3629 0.199062 13.9743 0.199062 13.9743C0.199062 13.9743 0.393146 15.3458 0.990331 15.95C1.74677 16.7432 2.74207 16.7173 3.18498 16.8009C4.77748 16.9532 9.95308 17 9.95308 17C9.95308 17 14.1364 16.994 16.9212 16.793C17.3104 16.7462 18.1594 16.7432 18.9158 15.95C19.513 15.3458 19.7071 13.9743 19.7071 13.9743C19.7071 13.9743 19.9062 12.3629 19.9062 10.7525V9.24257C19.9062 7.63117 19.7071 6.02076 19.7071 6.02076V6.02076Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
    </section>
</div>

<section class="position-relative py-md-5 py-3" style=" z-index: 99;">
    <div class="container mx-auto px-3">
        <div class="w-100 p-3 bg-white rounded shadow gap-4">
            <div class="row align-items-md-end align-items-center">
                <div class="col-12 col-md-6 col-lg-9 mb-4">
                    <section class="w-100 h-100 gap-4">
                        <div class="d-flex flex-column flex-md-row align-items-center gap-2 mb-md-5 mb-2">
                            <h1 class="fw-semibold" style="font-size: 28px;">
                                Berita Terkini
                            </h1>
                            <div class="d-flex justify-content-center flex-column text-center" style="flex: 1 1 0%;">
                                <div class="border-bottom"></div>
                            </div>
                            <a href="{{url('berita')}}?kategori={{ $kategori_berita[0]->nama }}" tabindex="-1" class="d-none d-md-block">
                                <button class="d-flex justify-content-between btn-sm font-sans btn btn-fill">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="animate-spin -ml-1 h-4 w-4 text-white" style="display:none;">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                            class="opacity-25"></circle>
                                        <path fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                            class="opacity-75">
                                        </path>
                                    </svg>
                                    Lihat Semua Berita
                                    <div aria-hidden="true"
                                        class="d-flex justify-content-center align-items-center mt-1 ms-1"
                                        style="width:14px;height:14px;">
                                        <i>
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg"
                                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                <path
                                                    d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                </path>
                                            </svg>
                                        </i>
                                    </div>
                                </button>
                            </a>
                        </div>
                        <div class="row">

                            <div class="col-12 col-lg-7">
                                <div class="w-100 rounded overflow-hidden" style="height: 536px;">
                                    <div class="h-100 overflow-hidden position-relative">
                                        <div class="h-100">
                                            <div class="h-100"
                                                data-src="{{asset('storage')}}/{{$berita_terkini[0]->gambar}}"
                                                lazy="loaded"
                                                style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url({{asset('storage')}}/{{$berita_terkini[0]->gambar}});">
                                            </div>
                                            <div class="visible d-inline-block  position-absolute bottom-0 bg-dark bg-opacity-50 rounded px-3 py-4 text-white"
                                                style="backdrop-filter: blur(8px); height: fit-content;">
                                                <div class="d-flex flex-column">

                                                    <div class="flex-grow-0">
                                                        <p class="font-roboto opacity-75 mb-1">
                                                            <small>{{ $berita_terkini[0]->kategori }}</small>
                                                        </p>
                                                        <a href="{{url('berita')}}/{{ $berita_terkini[0]->slug }}"
                                                            class="">
                                                            <h2 class="text-truncate-3 fs-5 font-intro fw-bold text-white mb-3 text-capitalize"
                                                                style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                                                {{ $berita_terkini[0]->judul }}
                                                            </h2>
                                                        </a>
                                                        <div
                                                            class="d-flex flex-column flex-md-row gap-2 opacity-50 mb-2">
                                                            <p class="d-flex align-items-center gap-2"
                                                                style="font-size: 12px;">
                                                                <img src="{{asset('template-user/icon/calendar.svg')}}" width="16px"
                                                                    height="16px" aria-hidden="true">
                                                                <span class="sr-only">Diterbitkan pada</span>
                                                                <span>{{
                                                                    Carbon\Carbon::parse($berita_terkini[0]->tanggal_rilis)->format('l,
                                                                    d F Y') }}</span>
                                                            </p>
                                                            <p class="ps-md-2 ps-0 d-flex align-items-center gap-1 capitalize"
                                                                style="font-size: 12px;">
                                                                <img src="{{asset('template-user/icon/pen.svg')}}" width="16px"
                                                                    height="16px" aria-hidden="true">
                                                                <span class="text-truncate"> Penulis : {{
                                                                    $berita_terkini[0]->penulis }}</span>
                                                            </p>
                                                        </div>
                                                        <div
                                                            class="d-md-flex justify-content-between align-items-center">
                                                            <a href="{{url('berita')}}/{{ $berita_terkini[0]->slug }}""
                                                                tabindex=" -1" class=""><button type="button"
                                                                    class="w-100 btn btn-sm btn-secondary bg-secondary bg-opacity-10 border px-4 py-2 rounded">
                                                                    Baca Selengkapnya
                                                                </button>
                                                            </a>
                                                            <!-- <div class="d-none d-md-flex align-items-center gap-2">
                                                                <button aria-label="Berita Sebelumnya"
                                                                    class="cursor-pointer btn btn-sm btn-secondary bg-secondary bg-opacity-10">
                                                                    <div aria-hidden="true"
                                                                        class="d-flex justify-content-center align-items-center"
                                                                        style="width:10px;height:10px;">
                                                                        <i class="mb-1">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                style="width: 10px; height: 10px; transform: rotate(0deg); fill: currentcolor;">
                                                                                <path
                                                                                    d="M5.27151 10.7024L12.8463 18.7124C13.0215 18.8979 13.2554 19 13.5047 19C13.7541 19 13.988 18.8979 14.1632 18.7124L14.721 18.1227C15.084 17.7384 15.084 17.1138 14.721 16.7301L8.36027 10.0037L14.7281 3.26988C14.9033 3.08447 15 2.8373 15 2.57374C15 2.30989 14.9033 2.06272 14.7281 1.87716L14.1702 1.28756C13.9949 1.10214 13.7612 0.999999 13.5118 0.999999C13.2624 0.999999 13.0286 1.10214 12.8534 1.28756L5.27151 9.30496C5.0959 9.49096 4.99945 9.7393 5 10.0033C4.99945 10.2683 5.0959 10.5165 5.27151 10.7024Z">
                                                                                </path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </button>
                                                                <p class="text-white"><span
                                                                        class="fw-bold text-white ms-1">
                                                                        1
                                                                    </span>
                                                                    dari 5
                                                                </p> <button aria-label="Berita Sebelumnya"
                                                                    class="cursor-pointer btn btn-sm btn-secondary bg-secondary bg-opacity-10">
                                                                    <div aria-hidden="true"
                                                                        class="d-flex justify-content-center align-items-center"
                                                                        style="width:10px;height:10px;">
                                                                        <i class="mb-1">
                                                                            <svg width="20" height="20"
                                                                                viewBox="0 0 20 20" fill="currentColor"
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                style="width: 10px; height: 10px; transform: rotate(0deg); fill: currentcolor;">
                                                                                <path
                                                                                    d="M14.7285 9.29764L7.15369 1.28756C6.97849 1.10215 6.74462 1 6.49525 1C6.24588 1 6.01201 1.10215 5.83682 1.28756L5.27898 1.87731C4.916 2.2616 4.916 2.88618 5.27898 3.26988L11.6397 9.99627L5.27193 16.7301C5.09673 16.9155 5 17.1627 5 17.4263C5 17.6901 5.09673 17.9373 5.27193 18.1228L5.82976 18.7124C6.00509 18.8979 6.23883 19 6.4882 19C6.73757 19 6.97144 18.8979 7.14663 18.7124L14.7285 10.695C14.9041 10.509 15.0006 10.2607 15 9.99671C15.0006 9.73169 14.9041 9.48349 14.7285 9.29764Z">
                                                                                </path>
                                                                            </svg>
                                                                        </i>
                                                                    </div>
                                                                </button>
                                                            </div> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-5">
                                <ul class="nav nav-pills mb-3 justify-content-center" id="pills-tab" role="tablist">
                                    <li class="nav-item w-50" role="presentation">
                                        <button class="nav-link w-100 active" id="pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-home" type="button" role="tab"
                                            aria-controls="pills-home" aria-selected="true">Terbaru</button>
                                    </li>
                                    <li class="nav-item w-50" role="presentation">
                                        <button class="nav-link w-100" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">Terpopuler</button>
                                    </li>
                                </ul>

                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab" tabindex="0">
                                        <ul id="latest-news-panel" class="h-100 d-flex flex-column gap-2 list-unstyled">
                                            @foreach($berita_terkini as $item)
                                            <li class="list-card duration-250 p-3 rounded list-type">
                                                <a href="{{url('berita')}}/{{$item->slug}}" class="">
                                                    <div class="d-flex flex-column gap-3 w-100">
                                                        <p class="text-truncate-3 fw-medium text-capitalize"
                                                            style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                                                            {{$item->judul}}
                                                        </p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p style="font-size: 12px;">
                                                                {{$item->kategori}}
                                                                <span aria-hidden="true" class="ms-1">
                                                                    |
                                                                </span>
                                                                <span class="sr-only">Dipublikasikantanggal</span>
                                                                <span class="ms-1">{{
                                                                    \Carbon\Carbon::parse($item->tanggal_rilis)->format('l,
                                                                    d F Y') }}</span>
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center"
                                                                aria-hidden="true" style="width: 16px; height: 16px;">
                                                                <i>
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        style="width: 16px; height: 16px; transform: rotate(0deg); fill: currentcolor;">
                                                                        <path
                                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                                        </path>
                                                                    </svg>
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab" tabindex="0">
                                        <ul id="latest-news-panel" class="h-100 d-flex flex-column gap-2 list-unstyled">
                                            @foreach($berita_terpopuler as $item)
                                            <li class="list-card duration-250 p-3 rounded list-type">
                                                <a href="{{url('berita')}}/{{$item->slug}}" class="">
                                                    <div class="d-flex flex-column gap-3 w-100">
                                                        <p class="text-truncate-3 fw-medium text-capitalize"
                                                            style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                                                            {{$item->judul}}
                                                        </p>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p style="font-size: 12px;">
                                                                {{$item->kategori}}
                                                                <span aria-hidden="true" class="ms-1">
                                                                    |
                                                                </span> <span class="sr-only">Dipublikasikan
                                                                    tanggal</span> <span class="ms-1">
                                                                    {{$item->tanggal_rilis}}
                                                                </span>
                                                            </p>
                                                            <div class="d-flex justify-content-center align-items-center"
                                                                aria-hidden="true" style="width: 16px; height: 16px;">
                                                                <i>
                                                                    <svg width="20" height="20" viewBox="0 0 20 20"
                                                                        fill="currentColor"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        style="width: 16px; height: 16px; transform: rotate(0deg); fill: currentcolor;">
                                                                        <path
                                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                                        </path>
                                                                    </svg>
                                                                </i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div id="gpr-kominfo-widget-container"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- promosi slider -->
<section class="pb-5">
    <div class="container mx-auto">
        <div class="swiper mySwiper-Banner">
            <div class="swiper-wrapper">
                @foreach ($promosi as $item)
                <div class="swiper-slide">
                    <a href="{{ $item->link }}" target="_blank" rel="noopener" title="Sapawarga" class="rounded-0">
                        <picture>
                            <img src="{{asset('storage')}}/{{$item->gambar}}"
                                alt="{{$item->nama}}" class="img-fluid w-100"
                                style="object-fit: cover;">
                        </picture>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- progam unggulan -->
<section class="pb-5">
    <div class="container mx-auto">
        <section class="w-100 gap-4">
            <div class="d-flex flex-column flex-md-row align-items-center gap-2 mb-4">
                <h1 class="fw-medium" style="font-size: 28px;">
                    Program Unggulan
                </h1>
                <div class="d-flex justify-content-center flex-column text-center" style="flex: 1 1 0%;">
                    <div class="border-bottom"></div>
                </div>
                <a href="{{url('program-unggulan')}}" tabindex="-1" class="">
                    <button class="d-flex justify-content-between btn-sm font-sans btn btn-fill">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display:none;">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25">
                            </circle>
                            <path fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                class="opacity-75">
                            </path>
                        </svg>
                        Lihat Semua Program
                        <div aria-hidden="true" class="d-flex justify-content-center align-items-center mt-1 ms-1"
                            style="width:14px;height:14px;">
                            <i>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                    <path
                                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                    </button>
                </a>
            </div>
        </section>
        <div class="swiper mySwiperbanner">
            <div class="swiper-wrapper">
                @foreach ($program_unggulan as $item)
                <div class="swiper-slide">
                    <div class="list-card list-type gap-4 p-4 rounded ease-brand duration-250">
                        <img src="{{asset('storage')}}/{{$item->gambar}}" alt="{{$item->nama}}" class="img-fluid" style="width:auto; height:40px">
                        <a href="{{ ($item->link != null) ? $item->link : url('/program-unggulan')}}" target="_blank" rel="noreferrer">
                            <h3 class="fw-bold mt-3 fs-5" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{ $item->nama }}
                            </h3>
                        </a>
                        <p class="text-truncate-3 mt-2" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{ $item->deskripsi }}
                        </p>
                        <a href="{{ ($item->link != null) ? $item->link : url('/program-unggulan')}}" target="_blank" rel="noreferrer"
                            class="mt-2 d-flex align-items-center">
                            <span>Selengkapnya</span>
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="mt-1 ms-2"
                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                <path
                                    d="M12.1854 17.6841L19.1713 10.6982C19.2366 10.6235 19.2904 10.5394 19.3309 10.4487L19.3908 10.3689C19.4323 10.2468 19.4525 10.1185 19.4507 9.98964C19.4601 9.90674 19.4601 9.82305 19.4507 9.74015L19.4507 9.61041C19.4142 9.5459 19.3707 9.48565 19.3209 9.43077L19.2311 9.28108L12.2453 2.2952C12.1525 2.20166 12.0421 2.12742 11.9205 2.07675C11.7989 2.02609 11.6684 2 11.5367 2C11.4049 2 11.2745 2.02609 11.1529 2.07675C11.0313 2.12742 10.9209 2.20166 10.8281 2.2952C10.7346 2.38798 10.6603 2.49835 10.6097 2.61997C10.559 2.74158 10.5329 2.87202 10.5329 3.00377C10.5329 3.13551 10.559 3.26596 10.6097 3.38757C10.6603 3.50918 10.7346 3.61956 10.8281 3.71234L16.0775 8.99166L0.997995 8.99166C0.733314 8.99166 0.479473 9.09681 0.292315 9.28396C0.105157 9.47112 1.31329e-05 9.72496 1.31213e-05 9.98964C1.31097e-05 10.2543 0.105157 10.5082 0.292315 10.6953C0.479473 10.8825 0.733314 10.9876 0.997995 10.9876L16.0376 10.9876L10.7283 16.267C10.6348 16.3597 10.5605 16.4701 10.5099 16.5917C10.4592 16.7133 10.4331 16.8438 10.4331 16.9755C10.4331 17.1073 10.4592 17.2377 10.5099 17.3593C10.5605 17.4809 10.6348 17.5913 10.7283 17.6841C10.8217 17.7838 10.9345 17.8633 11.0598 17.9176C11.1851 17.972 11.3203 18 11.4568 18C11.5934 18 11.7286 17.972 11.8539 17.9176C11.9792 17.8633 12.092 17.7838 12.1854 17.6841V17.6841Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- layanan terpopuler -->
<section class="pb-5">
    <div class="container mx-auto">
        <section class="w-100 gap-4">
            <div class="d-flex flex-column flex-md-row align-items-center gap-2 mb-4">
                <h1 class="fw-medium" style="font-size: 28px;">
                    Layanan Terpopuler
                </h1>
            </div>
        </section>
        <div class="swiper mySwiperbanner">
            <div class="swiper-wrapper">
                @foreach ($layanan_publik as $item)
                <div class="swiper-slide">
                    <div class="list-card list-type gap-4 p-md-4 p-3 rounded ease-brand duration-250">
                        <img src="{{asset('storage')}}/{{$item->logo}}" alt="{{$item->nama}}" class="img-fluid" style="width:auto; height:40px">
                        <a href="{{url('layanan-publik')}}/{{$item->slug}}" rel="noreferrer">
                            <h3 class="fw-bold mt-3 fs-5" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;">
                                {{$item->nama}}
                            </h3>
                        </a>
                        <p class="text-truncate-3 mt-2" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                            {{$item->deskripsi_singkat}}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- arsip dan dokumen -->
<section class="pb-5">
    <div class="container mx-auto">
        <section class="w-100 gap-4">
            <div class="d-flex flex-column flex-md-row align-items-center gap-2 mb-4">
                <h1 class="fw-medium" style="font-size: 28px;">
                    Transparansi Keuangan Daerah
                </h1>
                <div class="d-flex justify-content-center flex-column text-center" style="flex: 1 1 0%;">
                    <p>Menyajikan Publikasi Kinerja Keuangan Daerah Provinsi Kalimantan Utara</p>
                </div>
                <a href="{{url('arsip-dokumen')}}" tabindex="-1" class="">
                    <button class="d-flex justify-content-between btn-sm font-sans btn btn-fill">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display:none;">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25">
                            </circle>
                            <path fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                class="opacity-75">
                            </path>
                        </svg>
                        Lihat Semua Laporan
                        <div aria-hidden="true" class="d-flex justify-content-center align-items-center mt-1 ms-1"
                            style="width:14px;height:14px;">
                            <i>
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg"
                                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                    <path
                                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                    </path>
                                </svg>
                            </i>
                        </div>
                    </button>
                </a>
            </div>
        </section>
        <div class="swiper mySwiperproduct">
            <div class="swiper-wrapper">
                @foreach ($arsip_dokumen as $item)
                <div class="swiper-slide">
                    <div class="bg-white gap-2 p-3 rounded border border-info" style="min-width: 282px;">
                        <div class="border rounded d-flex align-items-center justify-content-center p-3" style="">
                            <img src="{{ asset('template-user/icon/pdf.svg') }}" alt="{{$item->nama}}" class="img-fluid" style="max-width:60px">
                        </div>
                        <div class="gap-3 mt-3">
                            <p class="text-dark mb-3 mt-3">
                                <small>{{$item->topik}}</small>
                            </p>
                            <h5 class="fw-bold mb-3 text-blue text-truncate">
                                {{$item->nama}}
                            </h5>
                            <p class="text-dark text-truncate-3 mb-4" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden;">
                                {{$item->deskripsi}}
                            </p>
                        </div>
                        <div class="mx-auto row mt-2">
                            <div class="col-6">
                                <a href="{{asset('storage')}}/{{$item->dokumen}}" target="_blank"
                                    class="btn btn-fill text-white btn-sm d-flex align-items-center p-2 justify-content-center">Lihat
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="jds-icon__svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                        </path>
                                        <path
                                            d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{asset('storage')}}/{{$item->dokumen}}" target="_blank"
                                    class="btn btn-fill text-white btn-sm d-flex align-items-center p-2 justify-content-center">Unduh
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="jds-icon__svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- aksi cepat -->
<section class="pb-5">
    <div class="container mx-auto">
        <div class="row ga">
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <div>
                    <h2 class="text-left fw-medium leading-loose">
                        Akses Cepat
                    </h2>
                    <p class="text-left">
                        Dapatkan kemudahaan akses ke beberapa layanan Pemerintah Provinsi Kalimantan Utara untuk
                        kebutuhan
                        Anda.
                    </p>
                </div>
            </div>
            @foreach ($akses_cepat as $item)
            <div class="col-12 col-md-6 col-lg-4 mb-3">
                <a href="{{$item->link}}" class="text-dark">
                    <div class="list-card list-type gap-4 p-4 rounded ease-brand duration-250" style="height: 253px;">
                        <img src="{{asset('storage')}}/{{$item->gambar}}" width="32px" height="32px"
                            alt="{{$item->nama}}" class="lazy-img" lazy="loaded">
                        <h3 class="fw-bold text-blue mt-3">{{$item->nama}}</h3>
                        <p class="text-truncate-3 mt-2">
                            {{$item->deskripsi}}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection
