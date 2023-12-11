@extends('layout/v_template')

@section('content')

<main>
    <section class="position-relative">
        <div class="w-100">
            <div class="swiper mySwiperHeroBerita">
                <div class="swiper-wrapper">
                    @foreach($berita_terkini as $item)
                    <div class="swiper-slide">
                        <div style="height: 650px; background-color: gray;">
                            <div class="w-100 h-100 overflow-hidden position-relative">
                                <div class="w-100 h-100">
                                    <div class="carousel-bg w-100 h-100"
                                        data-src="{{asset('storage')}}/{{$item->gambar}}"
                                        lazy="loaded"
                                        style="background-size: cover; background-repeat: no-repeat; background-position: center; background-image: radial-gradient(56.33% 56.33% at 50.59% 43.67%, rgba(0, 23, 28, 0.5) 0%, rgba(0, 11, 14, 0.7) 46.15%, rgba(0, 11, 14, 0.82) 100%), url({{asset('storage')}}/{{$item->gambar}});">
                                    </div>
                                    <div class="position-absolute w-100 text-white" style="bottom: 0;">
                                        <div class="container mx-auto px-3">
                                            <div class="d-flex flex-column justify-content-end h-100 pb-4">
                                                <div>
                                                    <p class="font-roboto mb-2">
                                                        {{$item->kategori}}
                                                    </p>
                                                    <h3 class="line-clamp-3 font-lora fw-bold mb-4">
                                                        {{$item->judul}}
                                                    </h3>
                                                    <div class="d-flex flex-column flex-md-row gap-2">
                                                        <div class="d-flex align-items-center gap-2"><img
                                                                src="{{ asset('template-user/icon/calendar.svg') }}" alt="Diterbitkan"
                                                                width="16px" height="16px">
                                                            <p>
                                                                {{ Carbon\Carbon::parse($item->tanggal_rilis)->format('l, d F Y') }}
                                                            </p>
                                                        </div>
                                                        <div class="d-block">
                                                            |
                                                        </div>
                                                        <div class="d-flex align-items-center gap-2"><img
                                                                src="{{ asset('template-user/icon/pen.svg') }}" alt="Penulis"
                                                                width="16px" height="16px">
                                                            <p>
                                                                Penulis: {{$item->penulis}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center mt-4">
                                                    <a href="{{url('berita')}}/{{$item->slug}}"
                                                        class="btn btn-secondary text-white" style="background-color: rgba(0,0,0,0.5);">
                                                        Baca Selengkapnya
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
    </section>
    <section>
        <div class="container my-4">
            <div class="swiper mySwiperCategory">
                <div class="swiper-wrapper align-items-center">
                    @foreach ($kategori_berita as $item)
                    <div class="swiper-slide">
                        <a href="{{url('berita')}}?kategori={{$item->nama}}"
                        class="text-decoration-none text-black fs-5 px-4 {{($item->nama == $berita_terkini[0]->kategori) ? 'btn btn-primary rounded-pill' : ''}}">
                        {{$item->nama}}
                    </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container pb-md-5 pb-3">
            <div class="row">
                <div class="col-12 col-md-8">
                    <section class="position-relative rounded overflow-hidden group mb-5" style="height: 430px;">
                        <a href="{{url('berita')}}/{{$berita_terpopuler[0]->slug}}"
                            class="">
                            <div class="cursor-pointer w-100 h-100"
                                data-src="{{asset('storage')}}/{{$berita_terpopuler[0]->gambar}}"
                                lazy="loaded"
                                style="background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url({{asset('storage')}}/{{$berita_terpopuler[0]->gambar}});">
                            </div>
                        </a>
                        <div class="position-absolute bottom-0 w-100 bg-dark bg-opacity-75 rounded p-3 text-white">
                            <div class="d-flex flex-column h-100">
                                <div class="flex-grow-0 mb-4">
                                    <p class="font-roboto fw-medium mb-1">
                                        Topik Hangat di {{$berita_terpopuler[0]->kategori}}
                                    </p>
                                    <h3 class="line-clamp-3 font-lora fw-bold mb-3 fs-4">
                                        {{$berita_terpopuler[0]->judul}}
                                    </h3>
                                    <div class="d-flex flex-column flex-md-row gap-2 opacity-50">
                                        <div class="d-flex align-items-center gap-2"><img
                                                src="{{ asset('template-user/icon/calendar.svg') }}" alt="Diterbitkan" width="16px"
                                                height="16px">
                                            <p>
                                                {{ Carbon\Carbon::parse($berita_terpopuler[0]->tanggal_rilis)->format('l, d F Y')}}
                                            </p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            |
                                        </div>
                                        <div class="d-flex align-items-center gap-2"><img src="{{ asset('template-user/icon/pen.svg') }}"
                                                alt="Penulis" width="16px" height="16px">
                                            <p>
                                                Penulis: {{$berita_terpopuler[0]->penulis}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-block d-md-flex justify-content-md-between align-items-md-center">
                                    <a href="{{url('berita')}}/{{$berita_terpopuler[0]->slug}}"
                                        class="btn text-white btn-secondary border border-white border-opacity-25 px-4 py-2 rounded"
                                        style="width: fit-content;">
                                        Baca Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section>
                        @foreach($berita as $item)
                        <div class="w-100 gap-3">
                            <article class="d-flex list-card duration-250 p-3 rounded list-type gap-2"
                                style="min-height: 88px;">
                                <div class="flex-shrink-0 overflow-hidden rounded image-list">
                                    <a href="{{url('berita')}}/{{$item->slug}}"
                                        class="">
                                        <img src="{{asset('storage')}}/{{$item->gambar}}"
                                            width="72" height="72"
                                            alt="{{$item->judul}}"
                                            class="lazy-img w-100 h-100 d-block"
                                            style="object-fit: cover; object-position: center;"
                                            data-src="{{asset('storage')}}/{{$item->gambar}}"
                                            lazy="loaded"></a>
                                </div>
                                <div class="w-100 d-flex flex-column align-items-start justify-content-center"><a
                                        href="{{url('berita')}}/{{$item->slug}}"
                                        class="">
                                        <h6 class="font-lato fw-medium line-clamp-2">
                                            {{$item->judul}}
                                        </h6>
                                    </a>
                                    <p class="fw-normal "><span>{{$item->kategori}}</span> | {{ Carbon\Carbon::parse($item->tanggal_rilis)->format('l, d F Y') }}
                                    </p>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </section>

                </div>
                <div class="col-12 col-md-4">
                    <div class="d-flex w-100 mb-1" style="height: 38px;">
                        <div style="border-bottom: 3px solid #2980b9;">
                            <p class="font-lato fw-bold text-blue text-uppercase" style="white-space: nowrap;font-size: 0.875rem;">
                                BERITA TERBARU <span class="ms-1" style="color: rgb(165, 165, 165);">DI {{$berita_terpopuler[0]->kategori}}</span>
                            </p>
                        </div>
                        <div class="w-100 h-100" style="border-bottom: 3px solid rgb(222, 222, 222);"></div>
                    </div>
                    <section class="mt-3">
                        @foreach($berita_terkini as $item)
                        <div class="w-100 gap-3 mt-2">
                            <article class="d-flex list-card duration-250 p-2 rounded list-type gap-2"
                                style="min-height: 88px;">
                                <div class="flex-shrink-0 overflow-hidden rounded" style="height: 72px; width: 72px;">
                                    <a href="{{url('berita')}}/{{$item->slug}}" class="">
                                        <img src="{{asset('storage')}}/{{$item->gambar}}"
                                            width="72" height="72"
                                            alt="Perekonomian Jabar 2024 Masih Bakal Tumbuh Positif  "
                                            class="lazy-img w-100 h-100 d-block"
                                            style="object-fit: cover; object-position: center;"
                                            data-src="{{asset('storage')}}/{{$item->gambar}}"
                                            lazy="loaded"></a>
                                </div>
                                <div class="w-100 d-flex flex-column align-items-start justify-content-center"><a
                                        href="{{url('berita')}}/{{$item->slug}}"
                                        class="">
                                        <h6 class="font-lato fw-semibold" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{$item->judul}}
                                        </h6>
                                    </a>
                                    <p class="fw-normal" style="font-size: 0.75rem;"><span> {{$item->kategori}}</span> | {{ Carbon\Carbon::parse($item->tanggal_rilis)->format('l, d F Y') }}
                                    </p>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </section>
                    <div class="d-flex w-100 mt-3" style="height: 38px;">
                        <div style="border-bottom: 3px solid #2980b9;">
                            <p
                                class="font-lato fw-bold text-blue text-uppercase" style="white-space: nowrap;font-size: 0.875rem;">
                                BERITA TERPOPULER <span class="ms-1" style="color: rgb(165, 165, 165);">DI {{$berita_terpopuler[0]->kategori}}</span></p>
                        </div>
                        <div class="w-100 h-100" style="border-bottom: 3px solid rgb(222, 222, 222);"></div>
                    </div>
                    <section class="mt-3">
                        @foreach($berita_terpopuler as $item)
                        <div class="w-100 gap-3 mt-2">
                        <article class="d-flex list-card duration-250 p-2 rounded list-type gap-2"
                                style="min-height: 88px;">
                                <div class="flex-shrink-0 overflow-hidden rounded" style="height: 72px; width: 72px;">
                                    <a href="{{url('berita')}}/{{$item->slug}}" class="">
                                        <img src="{{asset('storage')}}/{{$item->gambar}}"
                                            width="72" height="72"
                                            alt="Perekonomian Jabar 2024 Masih Bakal Tumbuh Positif  "
                                            class="lazy-img w-100 h-100 d-block"
                                            style="object-fit: cover; object-position: center;"
                                            data-src="{{asset('storage')}}/{{$item->gambar}}"
                                            lazy="loaded"></a>
                                </div>
                                <div class="w-100 d-flex flex-column align-items-start justify-content-center"><a
                                        href="{{url('berita')}}/{{$item->slug}}"
                                        class="">
                                        <h6 class="font-lato fw-semibold" style="display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical; overflow: hidden;">
                                            {{$item->judul}}
                                        </h6>
                                    </a>
                                    <p class="fw-normal" style="font-size: 0.75rem;"><span> {{$item->kategori}}</span> | {{ Carbon\Carbon::parse($item->tanggal_rilis)->format('l, d F Y') }}
                                    </p>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </section>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection

@section('styles')
<style>
.mySwiperCategory .swiper-slide .btn-primary{
    background-color: #2980b9;
    color: white!important;
}
</style>
@endsection

@section('scripts')
<!-- Initialize Swiper -->
<script>
    var mySwiperHeroBerita = new Swiper(".mySwiperHeroBerita", {
        spaceBetween: 30,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        effect: "fade",
        loop: true,
    });
    var mySwiperCategory = new Swiper(".mySwiperCategory", {
        slidesPerView: 6,
        spaceBetween: 30,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 50,
            },
        },
    });
</script>

@endsection
