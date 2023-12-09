@extends('layout/v_template')

@section('content')

<div class="position-relative">
    <div style="height: 740px;">
        <div class="w-100 h-100 position-absolute top-0"
            style="background: radial-gradient(100% 820.78% at 0% 0%, rgba(0, 40, 19, 0.9) 0%, rgba(0, 32, 39, 0.7) 61.62%)">
        </div>
        <div class="carousel w-100 h-100 overflow-hidden position-relative">
            <div class="w-100 h-100">
                <div class="carousel-bg w-100 h-100"
                    style="background-repeat: no-repeat; background-size: cover; background-position: center; background-image: url({{ asset('template-user/img/banners/1.webp') }});">
                </div>
                <div class="w-100 h-100 position-absolute top-0"
                    style="background:radial-gradient(100% 820.78% at 0% 0%, rgba(0, 40, 19, 0.9) 0%, rgba(0, 32, 39, 0.7) 61.62%);">
                </div>
            </div>
        </div>
    </div>
    <section class="section-hero">
        <div class="container px-4 mx-auto hero">
            <div class="hero-item"
                style="background-image:url({{ asset('template-user/img/hero.svg') }});background-position:center top;background-size:contain;">
                <h1 class="text-hero font-intro uppercase">
                    Menjawab Kebutuhan Informasi
                </h1>
                <h2 class="text-hero font-intro uppercase">
                    Publik Warga Kalimantan Utara
                </h2>
                <p class="text-hero">
                    Temukan informasi publik terkini dari Pemerintah Daerah Provinsi Kalimantan Utara
                </p>
                <div class="section-form w-100">
                    <div class="position-relative" style="margin-bottom: 32px;">
                        <form class="form-item">
                            <div class="frame-form" style="width:16px;height:16px;">
                                <i class="ku-icon">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                        style="width: 16px; height: 16px; transform: rotate(0deg); fill: currentcolor;">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.1841 15.0024C11.9231 15.9004 10.3804 16.4286 8.71429 16.4286C4.4538 16.4286 1 12.9748 1 8.71429C1 4.4538 4.4538 1 8.71429 1C12.9748 1 16.4286 4.4538 16.4286 8.71429C16.4286 10.3804 15.9004 11.9231 15.0024 13.1841L18.6234 16.8051C19.1255 17.3073 19.1255 18.1213 18.6234 18.6234C18.1213 19.1255 17.3073 19.1255 16.8051 18.6234L13.1841 15.0024ZM13.8571 8.71429C13.8571 11.5546 11.5546 13.8571 8.71429 13.8571C5.87396 13.8571 3.57143 11.5546 3.57143 8.71429C3.57143 5.87396 5.87396 3.57143 8.71429 3.57143C11.5546 3.57143 13.8571 5.87396 13.8571 8.71429Z">
                                        </path>
                                    </svg>
                                </i>
                            </div>
                            <input type="text" aria-label="Kolom Pencarian" value="" class="input-form">
                            <button type="button" style="display:none; color: rgb(107 114 128);">
                                <div class="d-flex justify-content-center align-align-items-center"
                                    style="width:16px;height:16px;">
                                    <i class="ku-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                            style="width: 16px; height: 16px; transform: rotate(0deg); fill: currentcolor;">
                                            <path
                                                d="M10 1C5.03745 1 1 5.03745 1 10C1 14.9625 5.03745 19 10 19C14.9625 19 19 14.9625 19 10C19 5.03745 14.9625 1 10 1ZM13.2586 12.2799C13.3256 12.3435 13.3792 12.4199 13.4162 12.5046C13.4532 12.5893 13.4728 12.6805 13.474 12.7729C13.4752 12.8653 13.4579 12.957 13.4231 13.0426C13.3882 13.1282 13.3366 13.206 13.2713 13.2713C13.206 13.3366 13.1282 13.3882 13.0426 13.4231C12.957 13.4579 12.8653 13.4752 12.7729 13.474C12.6805 13.4728 12.5893 13.4532 12.5046 13.4162C12.4199 13.3792 12.3435 13.3256 12.2799 13.2586L10 10.9792L7.72014 13.2586C7.58926 13.383 7.41497 13.4513 7.23444 13.4489C7.05391 13.4466 6.88143 13.3739 6.75377 13.2462C6.6261 13.1186 6.55336 12.9461 6.55105 12.7656C6.54874 12.585 6.61704 12.4107 6.74139 12.2799L9.02082 10L6.74139 7.72014C6.61704 7.58926 6.54874 7.41497 6.55105 7.23444C6.55336 7.05391 6.6261 6.88143 6.75377 6.75377C6.88143 6.6261 7.05391 6.55336 7.23444 6.55105C7.41497 6.54874 7.58926 6.61704 7.72014 6.74139L10 9.02082L12.2799 6.74139C12.4107 6.61704 12.585 6.54874 12.7656 6.55105C12.9461 6.55336 13.1186 6.6261 13.2462 6.75377C13.3739 6.88143 13.4466 7.05391 13.4489 7.23444C13.4513 7.41497 13.383 7.58926 13.2586 7.72014L10.9792 10L13.2586 12.2799Z">
                                            </path>
                                        </svg>
                                    </i>
                                </div>
                            </button>
                            <button class="ku-button ku-button--primary button-form">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="animate-spin -ml-1 h-4 w-4 text-white" style="display:none;">
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
                    <section>
                        <p class="font-lato popular-search-text mb-4">
                            Pencarian populer di Kalimantan Utara
                        </p>
                        <div class="popular-item">
                            <div
                                class="swiper-container rounded-xl overflow-hidden swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active"
                                        style="margin-right: 16px;width: fit-content !important;">
                                        <a href="/pencarian?q=Masjid%20Al%20Jabbar" class="item-trend">
                                            <p class="text-trend" style="margin-top: auto;">
                                                Masjid Al Jabbar
                                            </p>
                                            <div class="icon-text-trend" style="width: 14px; height: 14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next"
                                        style="margin-right: 16px;width: fit-content !important;"><a
                                            href="/pencarian?q=Ridwan%20Kamil" class="item-trend">
                                            <p class="text-trend" style="margin-top: auto;">
                                                Ridwan Kamil
                                            </p>
                                            <div class="icon-text-trend" style="width: 14px; height: 14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide"
                                        style="margin-right: 16px; width: fit-content !important;">
                                        <a href="/pencarian?q=Jawa%20Barat" class="item-trend">
                                            <p class="text-trend" style="margin-top: auto;">
                                                Kalimantan Utara
                                            </p>
                                            <div class="icon-text-trend" style="width: 14px; height: 14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="swiper-slide"
                                        style="margin-right: 16px; width: fit-content !important;">
                                        <a href="/pencarian?q=Wisata%20Jabar" class="item-trend">
                                            <p class="text-trend" style="margin-top: auto;">
                                                Wisata Jabar
                                            </p>
                                            <div class="icon-text-trend" style="width: 14px; height: 14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                            </div>
                        </div>
                    </section>
                </div>
                <div class="w-100" style="max-width: 36rem;">
                    <div class="frame-sc">
                        <div class="group item-sc">
                            <button class="w-100 bg-opacity-5 backdrop-filter backdrop-blur button-sc"
                                style="margin-bottom: 1rem;">
                                <span aria-hidden="true" class="transform span-icon"
                                    style="mask-image:url({{ asset('template-user/icon/feedback.svg') }});mask-repeat:no-repeat;mask-size:100% 100%;-webkit-mask-image:url({{ asset('template-user/icon/feedback.svg') }});-webkit-mask-repeat:no-repeat;-webkit-mask-size:100% 100%;background-color:white;height:20px;width:20px;display:inline-block;"></span>
                                <p class="text-sc">
                                    Kritik dan Saran
                                </p>
                            </button>
                        </div>
                    </div>
                </div>
                <ul class="list-sosmed">
                    <li
                        class="group item-sosmed backdrop-filter backdrop-blur bg-opacity-5  transition-all ease-brand duration-250">
                        <a href="https://www.facebook.com/jabarprov" target="_blank" rel="noreferrer"
                            aria-label="Facebook" class="list-icon-sosmed">
                            <div aria-hidden="true" class="icon-sosmed" style="width:18px;height:18px;"><i
                                    class="ku-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M17.3635 1.00006H2.63618C1.73209 1.00006 0.999817 1.73233 0.999817 2.63642V17.3637C0.999817 18.2678 1.73209 19.0001 2.63618 19.0001H10.818V11.6364H8.36345V9.18188H10.818V7.86379C10.818 5.36833 12.0338 4.27279 14.1079 4.27279C15.1012 4.27279 15.6265 4.34642 15.8752 4.37997V6.72733H14.4605C13.5802 6.72733 13.2725 7.19206 13.2725 8.13297V9.18188H15.8531L15.5029 11.6364H13.2725V19.0001H17.3635C18.2675 19.0001 18.9998 18.2678 18.9998 17.3637V2.63642C18.9998 1.73233 18.2667 1.00006 17.3635 1.00006Z">
                                        </path>
                                    </svg></i></div>
                        </a>
                    </li>
                    <li
                        class="group item-sosmed backdrop-filter backdrop-blur bg-opacity-5  transition-all ease-brand duration-250">
                        <a href="https://www.instagram.com/jabarprovgoid" target="_blank" rel="noreferrer"
                            aria-label="Instagram" class="list-icon-sosmed">
                            <div aria-hidden="true" class="icon-sosmed" style="width:18px;height:18px;"><i
                                    class="ku-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path
                                            d="M6 1C3.239 1 1 3.239 1 6V14C1 16.761 3.239 19 6 19H14C16.761 19 19 16.761 19 14V6C19 3.239 16.761 1 14 1H6ZM16 3C16.552 3 17 3.448 17 4C17 4.552 16.552 5 16 5C15.448 5 15 4.552 15 4C15 3.448 15.448 3 16 3ZM10 5C12.761 5 15 7.239 15 10C15 12.761 12.761 15 10 15C7.239 15 5 12.761 5 10C5 7.239 7.239 5 10 5ZM10 7C9.20435 7 8.44129 7.31607 7.87868 7.87868C7.31607 8.44129 7 9.20435 7 10C7 10.7957 7.31607 11.5587 7.87868 12.1213C8.44129 12.6839 9.20435 13 10 13C10.7956 13 11.5587 12.6839 12.1213 12.1213C12.6839 11.5587 13 10.7957 13 10C13 9.20435 12.6839 8.44129 12.1213 7.87868C11.5587 7.31607 10.7956 7 10 7Z">
                                        </path>
                                    </svg></i></div>
                        </a>
                    </li>
                    <li
                        class="group item-sosmed backdrop-filter backdrop-blur bg-opacity-5  transition-all ease-brand duration-250">
                        <a href="https://twitter.com/jabarprovgoid" target="_blank" rel="noreferrer"
                            aria-label="Twitter" class="list-icon-sosmed">
                            <div aria-hidden="true" class="icon-sosmed" style="width:18px;height:18px;"><i
                                    class="ku-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
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
                                    </svg></i></div>
                        </a>
                    </li>
                    <li
                        class="group item-sosmed backdrop-filter backdrop-blur bg-opacity-5  transition-all ease-brand duration-250">
                        <a href="https://www.youtube.com/channel/UCiDN1p49p87vtkhMC5BhdXA" target="_blank"
                            rel="noreferrer" aria-label="YouTube" class="list-icon-sosmed">
                            <div aria-hidden="true" class="icon-sosmed" style="width:18px;height:18px;"><i
                                    class="ku-icon"><svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.89777 12.5828V6.98919L13.2754 9.79596L7.89777 12.5828V12.5828ZM19.7071 6.02076C19.7071 6.02076 19.513 4.64823 18.9158 4.04408C18.1594 3.25181 17.3104 3.24783 16.9212 3.20105C14.1364 3 9.95706 3 9.95706 3H9.9491C9.9491 3 5.77079 3 2.98493 3.20105C2.59576 3.24783 1.74776 3.25082 0.990331 4.04408C0.393146 4.64823 0.199062 6.02076 0.199062 6.02076C0.199062 6.02076 0 7.63117 0 9.24257V10.7525C0 12.3629 0.199062 13.9743 0.199062 13.9743C0.199062 13.9743 0.393146 15.3458 0.990331 15.95C1.74677 16.7432 2.74207 16.7173 3.18498 16.8009C4.77748 16.9532 9.95308 17 9.95308 17C9.95308 17 14.1364 16.994 16.9212 16.793C17.3104 16.7462 18.1594 16.7432 18.9158 15.95C19.513 15.3458 19.7071 13.9743 19.7071 13.9743C19.7071 13.9743 19.9062 12.3629 19.9062 10.7525V9.24257C19.9062 7.63117 19.7071 6.02076 19.7071 6.02076V6.02076Z">
                                        </path>
                                    </svg></i></div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <div class="curved"></div>
</div>
<section class="position-relative section-news">
    <div class="container px-4 mx-auto ">
        <div class="w-100 h-100 p-4 bg-white shadow-sm" style="border-radius: 0.75rem;">
            <div class="row">
                <div class="col-12 col-md-3 order-2 order-md-1">
                    <section
                        class="position-relative w-100 frame-kominfo-widget d-flex justify-content-center align-items-center overflow-hidden"
                        style="background-color: #262879; max-width: 500px;justify-self: center;border-radius: 0.5rem;">
                        <div id="gpr-kominfo-widget-container"></div>
                    </section>
                </div>

                <div class="col-12 col-md-9 order-1 order-md-2">
                    <section class="w-100 h-100">
                        <div class="item-news" style="align-items: center;">
                            <h1 class="header-section-news">
                                Berita Terkini
                            </h1>
                            <div class="line-section">
                                <div class="line-header-news"></div>
                            </div>
                            <a href="/berita" tabindex="-1" style="text-decoration: none;">
                                <button class="d-flex justify-content-between ku-button ku-button--secondary">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        class="animate-spin ml-1 h-4 w-4 text-white"
                                        style="display:none;margin-left: -0.25rem;height: 1rem;">
                                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                            class="opacity-25"></circle>
                                        <path fill="currentColor"
                                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                            class="opacity-75"></path>
                                    </svg>
                                    Lihat Semua Berita
                                    <!-- <div aria-hidden="true"
                                            class="d-flex justify-content-center align-items-center"
                                            style="width:14px;height:14px;">
                                            <i class="ku-icon">
                                                <svg width="20"
                                                    height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div> -->
                                </button>
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-7">
                                <div class="overflow-hidden" style="height: 536px;border-radius: 0.5rem;">
                                    <div class="w-100 h-100 overflow-hidden position-relative group">
                                        <div class="w-100 h-100">
                                            <div class="carousel-bg w-100 h-100 transition duration-500 ease-in-out hover-group"
                                                data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1700920625-sabtu7.jpeg"
                                                lazy="loaded"
                                                style="background-repeat: no-repeat; background-position: center; background-size: cover; background-image: url(&quot;https://dvgddkosknh6r.cloudfront.net/live/media/img/1700920625-sabtu7.jpeg&quot;);">
                                            </div>
                                            <div class="news__preview__content backdrop-blur">
                                                <div class="d-flex flex-column h-100">

                                                    <div class="flex-grow-1">
                                                        <p class="font-roboto text-white"
                                                            style="text-transform: uppercase;line-height: 1.5;letter-spacing: 0.05em;opacity: 0.8;margin-bottom: 0.25rem;">
                                                            sosial
                                                        </p>
                                                        <a href="/" class="text-white" style="text-decoration: none;">
                                                            <h2 class="title-news text-truncate">
                                                                Bey Machmudin: Pengairan Sawah Jangan Ada yang
                                                                Tersendat
                                                            </h2>
                                                        </a>
                                                        <div
                                                            class="d-flex flex-column flex-md-row gap-2 frame-info-news">
                                                            <p class="d-flex align-items-center gap-2 pr-md-2">
                                                                <img src="{{ asset('template-user/icon/calendar.svg')}}" width="16px"
                                                                    height="16px" aria-hidden="true">
                                                                <span class="sr-only">2 Jam yang </span>
                                                            </p>
                                                            <p
                                                                class="pl-md-2 d-flex align-items-center gap-2 capitalize">
                                                                <img src="{{ asset('template-user/icon/pen.svg')}}" width="16px"
                                                                    height="16px" aria-hidden="true">
                                                                <span class="text-truncate">
                                                                    Penulis : humas jabar; Rep Guh
                                                                </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="d-md-flex justify-content-between align-items-center">
                                                        <a href="/berita/bey-machmudin-pengairan-sawah-jangan-ada-yang-tersendat-11491"
                                                            tabindex="-1" class="">
                                                            <button type="button" class="w-100"
                                                                style="font-size: 0.875rem;border: 1px solid rgba(255, 255, 255, 0.3);color: white; padding: 0.5rem 1rem;border-radius: 0.375rem;background-color: transparent;">
                                                                Baca Selengkapnya
                                                            </button></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-5">
                                <div data-fetch-key="1" class="row" style="height: max-content;">
                                    <ul class="nav mb-3 justify-content-center" id="pills-tab" role="tablist">
                                        <li role="presentation">
                                            <a class="nav-link text-black" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab"
                                                aria-controls="pills-home" aria-selected="true">Terbaru</a>
                                        </li>
                                        <li role="presentation">
                                            <a class="nav-link text-black" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">Terpopuler</a>
                                        </li>
                                    </ul>
                                    <ul id="latest-news-panel" class="h-100 d-flex flex-column"
                                        style="list-style: none;">
                                        <li class="hover:bg-green-50 p-3 rounded-lg group transition-colors ease-brand duration-250"
                                            style="text-decoration: none;border-radius: 0.5rem; padding: 0.75rem;">
                                            <a href="/berita/bey-machmudin-pengairan-sawah-jangan-ada-yang-tersendat-11491"
                                                class="">
                                                <div class="d-flex flex-column gap-3">
                                                    <h5 class="text-truncate group-hover:text-green-900"
                                                        style="color: #022b55;">
                                                        Bey Machmudin: Pengairan Sawah Jangan Ada yang Tersendat
                                                    </h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="text-secondary group-hover:text-blue-gray-800 capitalize"
                                                            style="font-size: 0.75rem;
                                                                line-height: 1rem;">
                                                            Sosial
                                                            <span aria-hidden="true"
                                                                class="text-secondary group-hover:text-blue-gray-800 ml-1">
                                                                |
                                                            </span> <span class="sr-only">Dipublikasikan
                                                                tanggal</span>
                                                            <span
                                                                class="text-secondary group-hover:text-blue-gray-800 ml-1">
                                                                20 jam yang lalu
                                                            </span>
                                                        </h6>
                                                        <div aria-hidden="true"
                                                            class="d-flex justify-conten-center align-items-center icon-link"
                                                            style="width:16px;height:16px;">
                                                            <i class="ku-icon">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="ku-icon__svg"
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
                                        <li class="hover:bg-green-50 p-3 rounded-lg group transition-colors ease-brand duration-250"
                                            style="text-decoration: none;border-radius: 0.5rem; padding: 0.75rem;">
                                            <a href="/berita/bey-machmudin-pengairan-sawah-jangan-ada-yang-tersendat-11491"
                                                class="">
                                                <div class="d-flex flex-column gap-3">
                                                    <h5 class="text-truncate group-hover:text-green-900"
                                                        style="color: #022b55;">
                                                        Bey Machmudin: Pengairan Sawah Jangan Ada yang Tersendat
                                                    </h5>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <h6 class="text-secondary group-hover:text-blue-gray-800 capitalize"
                                                            style="font-size: 0.75rem;
                                                                line-height: 1rem;">
                                                            Sosial
                                                            <span aria-hidden="true"
                                                                class="text-secondary group-hover:text-blue-gray-800 ml-1">
                                                                |
                                                            </span> <span class="sr-only">Dipublikasikan
                                                                tanggal</span>
                                                            <span
                                                                class="text-secondary group-hover:text-blue-gray-800 ml-1">
                                                                20 jam yang lalu
                                                            </span>
                                                        </h6>
                                                        <div aria-hidden="true"
                                                            class="d-flex justify-conten-center align-items-center icon-link"
                                                            style="width:16px;height:16px;">
                                                            <i class="ku-icon">
                                                                <svg width="20" height="20" viewBox="0 0 20 20"
                                                                    fill="currentColor"
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    class="ku-icon__svg"
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
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="frame-slider-home">
    <div class="container px-4 mx-auto">
        <div class="swiper mySwiper banner__swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="w-100 aspect-w-3 aspect-h-1">
                        <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noopener" title="Sapawarga">
                            <picture>
                                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1687854658-banner-sapawarga.jpg"
                                    alt="Sapawarga" width="360" height="120" class="w-100 h-100 object-cover"
                                    style="background-color: rgb(238 238 238, 1); border-radius: 0.5rem;">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 aspect-w-3 aspect-h-1">
                        <a href="https://dpmptsp.jabarprov.go.id/mppdigital/" target="_blank" rel="noopener"
                            title="Mall Pelayanan Publik">
                            <picture>
                                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1687855397-banner-mpp.jpg"
                                    alt="Mall Pelayanan Publik" width="360" height="120"
                                    class="w-100 h-100 object-cover"
                                    style="background-color: rgb(238 238 238, 1); border-radius: 0.5rem;">
                            </picture>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="w-100 aspect-w-3 aspect-h-1">
                        <a href="https://asean2023.id/id" target="_blank" rel="noopener" title="KTT ASEAN">
                            <picture>
                                <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/infographic-banners/1695775690-compressed_Banner-PJ_Slider-Mobile-(1).jpg"
                                    alt="KTT ASEAN" width="360" height="120" class="w-100 h-100 object-cover"
                                    style="background-color: rgb(238 238 238, 1); border-radius: 0.5rem;">
                            </picture>
                        </a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
<section class="featured-program--container">
    <div class="container px-4 mx-auto px-6 2xl:px-0 xl:max-w-7xl">
        <div class="item-news" style="align-items: center;">
            <h1 class="header-section-news">
                Program Unggulan
            </h1>
            <div class="line-section">
                <div class="line-header-news"></div>
            </div>
            <a href="/berita" tabindex="-1" style="text-decoration: none;">
                <button class="d-flex justify-content-between ku-button ku-button--secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        class="animate-spin ml-1 h-4 w-4 text-white"
                        style="display:none;;margin-left: -0.25rem;height: 1rem;width: 1rem;color: #fff;">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" class="opacity-25">
                        </circle>
                        <path fill="currentColor"
                            d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                            class="opacity-75"></path>
                    </svg>
                    Lihat Semua Program

                </button>
            </a>
        </div>
        <div class="position-relative featured-program">
            <div
                class="swiper mySwiperProgram featured-program__swiper swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="d-flex flex-column shadow-sm group frame-slider-program transition-colors ease-brand duration-250">
                            <img src="{{ asset('template-user/icon/sapawarga.svg')}}" width="32" height="32" alt="Sapawarga"
                                class="lazy-img" data-src="{{ asset('template-user/icon/sapawarga.svg')}}" lazy="loaded">
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer">
                                <h3 class="title-slider-program">
                                    Sapawarga
                                </h3>
                            </a>
                            <p class="text-sm excerpt-slider-program">
                                Sapawarga adalah aplikasi layanan publik digital terintegrasi di Jawa Barat yang
                                menyediakan
                                berbagai kebutuhan masyarakat dalam satu aplikasi.
                            </p>
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer"
                                class="align-self-start">
                                <button
                                    class="d-flex justify-content-between ku-button font-sans-1 ku-button--tertiary-paddingless"
                                    tabindex="-1" style="align-items: center;">
                                    Selengkapnya
                                    <div class="d-flex justify-content-center align-items-center ms-2"
                                        style="width: 14px; height: 14px;margin-top: 2.5%;">
                                        <i class="ku-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                <path
                                                    d="M12.1854 17.6841L19.1713 10.6982C19.2366 10.6235 19.2904 10.5394 19.3309 10.4487L19.3908 10.3689C19.4323 10.2468 19.4525 10.1185 19.4507 9.98964C19.4601 9.90674 19.4601 9.82305 19.4507 9.74015L19.4507 9.61041C19.4142 9.5459 19.3707 9.48565 19.3209 9.43077L19.2311 9.28108L12.2453 2.2952C12.1525 2.20166 12.0421 2.12742 11.9205 2.07675C11.7989 2.02609 11.6684 2 11.5367 2C11.4049 2 11.2745 2.02609 11.1529 2.07675C11.0313 2.12742 10.9209 2.20166 10.8281 2.2952C10.7346 2.38798 10.6603 2.49835 10.6097 2.61997C10.559 2.74158 10.5329 2.87202 10.5329 3.00377C10.5329 3.13551 10.559 3.26596 10.6097 3.38757C10.6603 3.50918 10.7346 3.61956 10.8281 3.71234L16.0775 8.99166L0.997995 8.99166C0.733314 8.99166 0.479473 9.09681 0.292315 9.28396C0.105157 9.47112 1.31329e-05 9.72496 1.31213e-05 9.98964C1.31097e-05 10.2543 0.105157 10.5082 0.292315 10.6953C0.479473 10.8825 0.733314 10.9876 0.997995 10.9876L16.0376 10.9876L10.7283 16.267C10.6348 16.3597 10.5605 16.4701 10.5099 16.5917C10.4592 16.7133 10.4331 16.8438 10.4331 16.9755C10.4331 17.1073 10.4592 17.2377 10.5099 17.3593C10.5605 17.4809 10.6348 17.5913 10.7283 17.6841C10.8217 17.7838 10.9345 17.8633 11.0598 17.9176C11.1851 17.972 11.3203 18 11.4568 18C11.5934 18 11.7286 17.972 11.8539 17.9176C11.9792 17.8633 12.092 17.7838 12.1854 17.6841V17.6841Z">
                                                </path>
                                            </svg>
                                        </i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="d-flex flex-column shadow-sm group frame-slider-program transition-colors ease-brand duration-250">
                            <img src="{{ asset('template-user/icon/sapawarga.svg')}}" width="32" height="32" alt="Sapawarga"
                                class="lazy-img" data-src="{{ asset('template-user/icon/sapawarga.svg')}}" lazy="loaded">
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer">
                                <h3 class="title-slider-program">
                                    Sapawarga
                                </h3>
                            </a>
                            <p class="text-sm excerpt-slider-program">
                                Sapawarga adalah aplikasi layanan publik digital terintegrasi di Jawa Barat yang
                                menyediakan
                                berbagai kebutuhan masyarakat dalam satu aplikasi.
                            </p>
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer"
                                class="align-self-start">
                                <button
                                    class="d-flex justify-content-between ku-button font-sans-1 ku-button--tertiary-paddingless"
                                    tabindex="-1" style="align-items: center;">
                                    Selengkapnya
                                    <div class="d-flex justify-content-center align-items-center ms-2"
                                        style="width: 14px; height: 14px;margin-top: 2.5%;">
                                        <i class="ku-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                <path
                                                    d="M12.1854 17.6841L19.1713 10.6982C19.2366 10.6235 19.2904 10.5394 19.3309 10.4487L19.3908 10.3689C19.4323 10.2468 19.4525 10.1185 19.4507 9.98964C19.4601 9.90674 19.4601 9.82305 19.4507 9.74015L19.4507 9.61041C19.4142 9.5459 19.3707 9.48565 19.3209 9.43077L19.2311 9.28108L12.2453 2.2952C12.1525 2.20166 12.0421 2.12742 11.9205 2.07675C11.7989 2.02609 11.6684 2 11.5367 2C11.4049 2 11.2745 2.02609 11.1529 2.07675C11.0313 2.12742 10.9209 2.20166 10.8281 2.2952C10.7346 2.38798 10.6603 2.49835 10.6097 2.61997C10.559 2.74158 10.5329 2.87202 10.5329 3.00377C10.5329 3.13551 10.559 3.26596 10.6097 3.38757C10.6603 3.50918 10.7346 3.61956 10.8281 3.71234L16.0775 8.99166L0.997995 8.99166C0.733314 8.99166 0.479473 9.09681 0.292315 9.28396C0.105157 9.47112 1.31329e-05 9.72496 1.31213e-05 9.98964C1.31097e-05 10.2543 0.105157 10.5082 0.292315 10.6953C0.479473 10.8825 0.733314 10.9876 0.997995 10.9876L16.0376 10.9876L10.7283 16.267C10.6348 16.3597 10.5605 16.4701 10.5099 16.5917C10.4592 16.7133 10.4331 16.8438 10.4331 16.9755C10.4331 17.1073 10.4592 17.2377 10.5099 17.3593C10.5605 17.4809 10.6348 17.5913 10.7283 17.6841C10.8217 17.7838 10.9345 17.8633 11.0598 17.9176C11.1851 17.972 11.3203 18 11.4568 18C11.5934 18 11.7286 17.972 11.8539 17.9176C11.9792 17.8633 12.092 17.7838 12.1854 17.6841V17.6841Z">
                                                </path>
                                            </svg>
                                        </i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="d-flex flex-column shadow-sm group frame-slider-program transition-colors ease-brand duration-250">
                            <img src="{{ asset('template-user/icon/sapawarga.svg')}}" width="32" height="32" alt="Sapawarga"
                                class="lazy-img" data-src="{{ asset('template-user/icon/sapawarga.svg')}}" lazy="loaded">
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer">
                                <h3 class="title-slider-program">
                                    Sapawarga
                                </h3>
                            </a>
                            <p class="text-sm excerpt-slider-program">
                                Sapawarga adalah aplikasi layanan publik digital terintegrasi di Jawa Barat yang
                                menyediakan
                                berbagai kebutuhan masyarakat dalam satu aplikasi.
                            </p>
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer"
                                class="align-self-start">
                                <button
                                    class="d-flex justify-content-between ku-button font-sans-1 ku-button--tertiary-paddingless"
                                    tabindex="-1" style="align-items: center;">
                                    Selengkapnya
                                    <div class="d-flex justify-content-center align-items-center ms-2"
                                        style="width: 14px; height: 14px;margin-top: 2.5%;">
                                        <i class="ku-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                <path
                                                    d="M12.1854 17.6841L19.1713 10.6982C19.2366 10.6235 19.2904 10.5394 19.3309 10.4487L19.3908 10.3689C19.4323 10.2468 19.4525 10.1185 19.4507 9.98964C19.4601 9.90674 19.4601 9.82305 19.4507 9.74015L19.4507 9.61041C19.4142 9.5459 19.3707 9.48565 19.3209 9.43077L19.2311 9.28108L12.2453 2.2952C12.1525 2.20166 12.0421 2.12742 11.9205 2.07675C11.7989 2.02609 11.6684 2 11.5367 2C11.4049 2 11.2745 2.02609 11.1529 2.07675C11.0313 2.12742 10.9209 2.20166 10.8281 2.2952C10.7346 2.38798 10.6603 2.49835 10.6097 2.61997C10.559 2.74158 10.5329 2.87202 10.5329 3.00377C10.5329 3.13551 10.559 3.26596 10.6097 3.38757C10.6603 3.50918 10.7346 3.61956 10.8281 3.71234L16.0775 8.99166L0.997995 8.99166C0.733314 8.99166 0.479473 9.09681 0.292315 9.28396C0.105157 9.47112 1.31329e-05 9.72496 1.31213e-05 9.98964C1.31097e-05 10.2543 0.105157 10.5082 0.292315 10.6953C0.479473 10.8825 0.733314 10.9876 0.997995 10.9876L16.0376 10.9876L10.7283 16.267C10.6348 16.3597 10.5605 16.4701 10.5099 16.5917C10.4592 16.7133 10.4331 16.8438 10.4331 16.9755C10.4331 17.1073 10.4592 17.2377 10.5099 17.3593C10.5605 17.4809 10.6348 17.5913 10.7283 17.6841C10.8217 17.7838 10.9345 17.8633 11.0598 17.9176C11.1851 17.972 11.3203 18 11.4568 18C11.5934 18 11.7286 17.972 11.8539 17.9176C11.9792 17.8633 12.092 17.7838 12.1854 17.6841V17.6841Z">
                                                </path>
                                            </svg>
                                        </i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div
                            class="d-flex flex-column shadow-sm group frame-slider-program transition-colors ease-brand duration-250">
                            <img src="{{ asset('template-user/icon/sapawarga.svg')}}" width="32" height="32" alt="Sapawarga"
                                class="lazy-img" data-src="{{ asset('template-user/icon/sapawarga.svg')}}" lazy="loaded">
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer">
                                <h3 class="title-slider-program">
                                    Sapawarga
                                </h3>
                            </a>
                            <p class="text-sm excerpt-slider-program">
                                Sapawarga adalah aplikasi layanan publik digital terintegrasi di Jawa Barat yang
                                menyediakan
                                berbagai kebutuhan masyarakat dalam satu aplikasi.
                            </p>
                            <a href="https://sapawarga.digitalservice.id/" target="_blank" rel="noreferrer"
                                class="align-self-start">
                                <button
                                    class="d-flex justify-content-between ku-button font-sans-1 ku-button--tertiary-paddingless"
                                    tabindex="-1" style="align-items: center;">
                                    Selengkapnya
                                    <div class="d-flex justify-content-center align-items-center ms-2"
                                        style="width: 14px; height: 14px;margin-top: 2.5%;">
                                        <i class="ku-icon">
                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                <path
                                                    d="M12.1854 17.6841L19.1713 10.6982C19.2366 10.6235 19.2904 10.5394 19.3309 10.4487L19.3908 10.3689C19.4323 10.2468 19.4525 10.1185 19.4507 9.98964C19.4601 9.90674 19.4601 9.82305 19.4507 9.74015L19.4507 9.61041C19.4142 9.5459 19.3707 9.48565 19.3209 9.43077L19.2311 9.28108L12.2453 2.2952C12.1525 2.20166 12.0421 2.12742 11.9205 2.07675C11.7989 2.02609 11.6684 2 11.5367 2C11.4049 2 11.2745 2.02609 11.1529 2.07675C11.0313 2.12742 10.9209 2.20166 10.8281 2.2952C10.7346 2.38798 10.6603 2.49835 10.6097 2.61997C10.559 2.74158 10.5329 2.87202 10.5329 3.00377C10.5329 3.13551 10.559 3.26596 10.6097 3.38757C10.6603 3.50918 10.7346 3.61956 10.8281 3.71234L16.0775 8.99166L0.997995 8.99166C0.733314 8.99166 0.479473 9.09681 0.292315 9.28396C0.105157 9.47112 1.31329e-05 9.72496 1.31213e-05 9.98964C1.31097e-05 10.2543 0.105157 10.5082 0.292315 10.6953C0.479473 10.8825 0.733314 10.9876 0.997995 10.9876L16.0376 10.9876L10.7283 16.267C10.6348 16.3597 10.5605 16.4701 10.5099 16.5917C10.4592 16.7133 10.4331 16.8438 10.4331 16.9755C10.4331 17.1073 10.4592 17.2377 10.5099 17.3593C10.5605 17.4809 10.6348 17.5913 10.7283 17.6841C10.8217 17.7838 10.9345 17.8633 11.0598 17.9176C11.1851 17.972 11.3203 18 11.4568 18C11.5934 18 11.7286 17.972 11.8539 17.9176C11.9792 17.8633 12.092 17.7838 12.1854 17.6841V17.6841Z">
                                                </path>
                                            </svg>
                                        </i>
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container px-4 mx-auto">
        <h2 class="title-serve">
            Layanan Terpopuler
        </h2>
        <div>
            <h2 class="title-serve-xl">
                Layanan Terpopuler
            </h2>
            <div class="row">
                <div class="col-12 col-md-9 order-1 order-md-2">
                    <div class="w-100 min-w-0">
                        <section class="section-category-serve">
                            <div class="mb-5">
                                <div class="d-flex align-items-center gap-5 mb-3">
                                    <img src="{{ asset('template-user/icon/wargi.svg')}}" width="56" height="56" alt="Wargi"
                                        class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/wargi.svg')}}"
                                        lazy="loaded">
                                    <div>
                                        <p class="font-roboto"
                                            style="font-weight: bold; font-size: 0.875rem; text-transform: uppercase; color: #90a4ae; margin-bottom: 0.25em; ">
                                            Untuk
                                        </p>
                                        <p class="font-roboto" style="font-weight: bold; font-size: 1.875rem; ">
                                            Wargi
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="swiper mySwiperWargi swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://disdukcapil.jabarprov.go.id/portal" target="_blank"
                                                    rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                                    <img src="{{ asset('template-user/icon/layanan-kependudukan.svg')}}"
                                                        alt="Layanan Kependudukan" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Layanan Kependudukan
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Informasi mengenai syarat dan tata cara mendapatkan layanan
                                                        kependudukan
                                                        di seluruh Kabupaten/Kota di Jawa Barat.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://bapenda.jabarprov.go.id/infopkb" target="_blank"
                                                    rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                                    <img src="{{ asset('template-user/icon/pajak-kendaraan-bermotor.svg')}}"
                                                        alt="Pajak Kendaraan Bermotor (PKB)" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Pajak Kendaraan Bermotor (PKB)
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Temukan informasi dan layanan mengenai Pajak Kendaran
                                                        Bermotor (PKB)
                                                        di
                                                        sini.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://www.jabarjawara.id" target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1">
                                                    <img src="{{ asset('template-user/icon/jabar-jawara.svg')}}" alt="Jabar Jawara"
                                                        width="24px" height="24px" class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Jabar Jawara
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Layanan informasi seputar lowongan pekerjaan, pengembangan
                                                        diri,
                                                        beasiswa, hingga cara untuk mengembangkan bisnis untuk
                                                        pelaku UMKM
                                                        di
                                                        Jawa Barat.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="d-flex align-items-center gap-5 mb-3">
                                    <img src="{{ asset('template-user/icon/usaha.svg')}}" width="56" height="56" alt="Usaha"
                                        class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/usaha.svg')}}"
                                        lazy="loaded">
                                    <div>
                                        <p class="font-roboto"
                                            style="font-weight: bold; font-size: 0.875rem; text-transform: uppercase; color: #90a4ae; margin-bottom: 0.25em; ">
                                            Untuk
                                        </p>
                                        <p class="font-roboto" style="font-weight: bold; font-size: 1.875rem; ">
                                            Usaha
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="swiper mySwiperWargi swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://sppirt.pom.go.id/" target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/perizinan-industri-rumah-tangga.svg')}}"
                                                        alt="SPP-IRT" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        SPP-IRT
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Layanan sertifikasi atau perizinan khusus industri pangan
                                                        kelas
                                                        rumahan.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://dpmptsp.jabarprov.go.id/web/pages/detail/220-layanan-online/87"
                                                    target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/perizinan-usaha.svg')}}" alt="Perizinan Usaha"
                                                        width="24px" height="24px" class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Perizinan Usaha
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Layanan informasi dan kepengurusan perizinan usaha.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://www.halalmui.org/mui14/main/page/prosedur-sertifikasi-halal-mui"
                                                    target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/pengajuan-sertifikasi-halal.svg')}}"
                                                        alt="Pengajuan Sertifikasi Halal" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Pengajuan Sertifikasi Halal
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Temukan informasi dan layanan mengenai pengajuan sertifikasi
                                                        halal
                                                        di
                                                        sini.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="d-flex align-items-center gap-5 mb-3">
                                    <img src="{{ asset('template-user/icon/wisatawan.svg')}}" width="56" height="56" alt="Wisatawan"
                                        class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/wisatawan.svg')}}"
                                        lazy="loaded">
                                    <div>
                                        <p
                                            class="font-roboto font-bold text-sm tracking-wide uppercase text-blue-gray-300 mb-1">
                                            Untuk
                                        </p>
                                        <p class="font-roboto text-3xl font-bold">
                                            Wisatawan
                                        </p>
                                    </div>
                                </div>
                                <div
                                    class="swiper mySwiperWargi swiper-container-initialized swiper-container-horizontal">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://disparbud.jabarprov.go.id" target="_blank"
                                                    rel="noreferrer" class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/info-wisata-jabar.svg')}}" alt="Info Wisata Jabar"
                                                        width="24px" height="24px" class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Info Wisata Jabar
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Temukan informasi mengenai destinasi wisata yang wajib
                                                        dikunjungi di
                                                        Jawa Barat.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://smilingwestjava.com/" target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/daerah-wisata-di-jawa-barat.svg')}}"
                                                        alt="Daerah Wisata Jawa Barat" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Daerah Wisata Jawa Barat
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Temukan informasi mengenai tempat wisata di Jawa Barat yang
                                                        wajib
                                                        dikunjungi.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                        <div class="swiper-slide">
                                            <section
                                                class="rounded-md d-flex justify-content-start align-items-center p-2"
                                                style="max-width: 250px; width: 100%;min-height: 130px;">
                                                <a href="https://smilingwestjava.com/" target="_blank" rel="noreferrer"
                                                    class="w-100 d-flex flex-column gap-1"><img
                                                        src="{{ asset('template-user/icon/daerah-wisata-di-jawa-barat.svg')}}"
                                                        alt="Daerah Wisata Jawa Barat" width="24px" height="24px"
                                                        class="opacity-40 grayscale">
                                                    <h3 class="font-bold text-blue-gray-600 ">
                                                        Daerah Wisata Jawa Barat
                                                    </h3>
                                                    <p class="text-sm leading-5 text-blue-gray-600 ">
                                                        Temukan informasi mengenai tempat wisata di Jawa Barat yang
                                                        wajib
                                                        dikunjungi.
                                                    </p>
                                                </a>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="position-relative section-category-serve-md">
                            <div class="row">
                                <div class="col-12 col-md-4 mb-4 gap-4">
                                    <div class="d-flex align-items-center gap-4 px-4">
                                        <img src="{{ asset('template-user/icon/wargi.svg')}}" width="56" height="56" alt="Wargi"
                                            class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/wargi.svg')}}"
                                            lazy="loaded">
                                        <div>
                                            <p class="font-roboto"
                                                style="font-weight: bold; font-size: 0.875rem; text-transform: uppercase; color: #90a4ae; margin-bottom: 0.25em; ">
                                                Untuk
                                            </p>
                                            <p class="font-roboto" style="font-weight: bold; font-size: 1.875rem; ">
                                                Wargi
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 gap-4">
                                    <div class="d-flex align-items-center gap-4 px-4">
                                        <img src="{{ asset('template-user/icon/usaha.svg')}}" width="56" height="56" alt="Usaha"
                                            class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/usaha.svg')}}"
                                            lazy="loaded">
                                        <div>
                                            <p class="font-roboto"
                                                style="font-weight: bold; font-size: 0.875rem; text-transform: uppercase; color: #90a4ae; margin-bottom: 0.25em; ">
                                                Untuk
                                            </p>
                                            <p class="font-roboto" style="font-weight: bold; font-size: 1.875rem; ">
                                                Usaha
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4 mb-4 gap-4">
                                    <div class="d-flex align-items-center gap-4 px-4">
                                        <img src="{{ asset('template-user/icon/wisatawan.svg')}}" width="56" height="56" alt="Wisatawan"
                                            class="lazy-img" data-v-f68829c0="" data-src="{{ asset('template-user/icon/wisatawan.svg')}}"
                                            lazy="loaded">
                                        <div>
                                            <p class="font-roboto"
                                                style="font-weight: bold; font-size: 0.875rem; text-transform: uppercase; color: #90a4ae; margin-bottom: 0.25rem; ">
                                                Untuk
                                            </p>
                                            <p class="font-roboto" style="font-weight: bold; font-size: 1.875rem; ">
                                                Wisatawan
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <ul class="section-content-serve-md" style="list-style-type: none;">
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;">
                                    <a href="https://disdukcapil.jabarprov.go.id/portal" target="_blank"
                                        rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/layanan-kependudukan.svg')}}" alt="Layanan Kependudukan"
                                                width="24" height="24" class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Layanan Kependudukan
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Informasi mengenai syarat dan tata cara mendapatkan layanan kependudukan
                                            di
                                            seluruh
                                            Kabupaten/Kota di Jawa Barat.
                                        </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;"><a href=" https://bapenda.jabarprov.go.id/infopkb"
                                        target="_blank" rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/pajak-kendaraan-bermotor.svg')}}"
                                                alt="Pajak Kendaraan Bermotor (PKB)" width="24" height="24"
                                                class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Pajak Kendaraan Bermotor (PKB)
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Temukan informasi dan layanan mengenai Pajak Kendaran Bermotor (PKB) di
                                            sini.
                                        </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;""><a href=" https://www.jabarjawara.id"
                                    target="_blank" rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ asset('template-user/icon/jabar-jawara.svg')}}" alt="Jabar Jawara" width="24"
                                            height="24" class="opacity-40">
                                        <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                            style="width:14px;height:14px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                    </div>
                                    <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                        style="font-weight: 600;">
                                        Jabar Jawara
                                    </h6>
                                    <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                        style="font-weight: 14px;">
                                        Layanan informasi seputar lowongan pekerjaan, pengembangan diri, beasiswa,
                                        hingga
                                        cara untuk mengembangkan bisnis untuk pelaku UMKM di Jawa Barat.
                                    </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;""><a href=" https://sppirt.pom.go.id/" target="_blank"
                                    rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <img src="{{ asset('template-user/icon/perizinan-industri-rumah-tangga.svg')}}" alt="SPP-IRT"
                                            width="24" height="24" class="opacity-40">
                                        <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                            style="width:14px;height:14px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                    </path>
                                                </svg></i>
                                        </div>
                                    </div>
                                    <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                        style="font-weight: 600;">
                                        SPP-IRT
                                    </h6>
                                    <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                        style="font-weight: 14px;">
                                        Layanan sertifikasi atau perizinan khusus industri pangan kelas rumahan.
                                    </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;">
                                    <a href="https://dpmptsp.jabarprov.go.id/web/pages/detail/220-layanan-online/87"
                                        target="_blank" rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/perizinan-usaha.svg')}}" alt="Perizinan Usaha" width="24"
                                                height="24" class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Perizinan Usaha
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Layanan informasi dan kepengurusan perizinan usaha.
                                        </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;">
                                    <a href="https://www.halalmui.org/mui14/main/page/prosedur-sertifikasi-halal-mui"
                                        target="_blank" rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/pengajuan-sertifikasi-halal.svg')}}"
                                                alt="Pengajuan Sertifikasi Halal" width="24" height="24"
                                                class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Pengajuan Sertifikasi Halal
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Temukan informasi dan layanan mengenai pengajuan sertifikasi halal di
                                            sini.
                                        </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;">
                                    <a href="https://disparbud.jabarprov.go.id" target="_blank" rel="noreferrer"
                                        class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/info-wisata-jabar.svg')}}" alt="Info Wisata Jabar"
                                                width="24" height="24" class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Info Wisata Jabar
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Temukan informasi mengenai destinasi wisata yang wajib dikunjungi di
                                            Jawa Barat.
                                        </p>
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start align-items-start group hover:bg-green-50 content-serve-md transition-all ease-brand duration-250"
                                    style="padding: 0.75rem 1rem;"><a href=" https://smilingwestjava.com/"
                                        target="_blank" rel="noreferrer" class="w-100 d-flex flex-column gap-1">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <img src="{{ asset('template-user/icon/daerah-wisata-di-jawa-barat.svg')}}"
                                                alt="Daerah Wisata Jawa Barat" width="24" height="24"
                                                class="opacity-40">
                                            <div class="d-flex justify-content-center align-items-center text-transparent group-hover:text-green-800"
                                                style="width:14px;height:14px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 14px; height: 14px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </div>
                                        <h6 class="font-bold text-blue-gray-600 group-hover:text-green-800"
                                            style="font-weight: 600;">
                                            Daerah Wisata Jawa Barat
                                        </h6>
                                        <p class="text-sm leading-5 text-blue-gray-600 group-hover:text-blue-gray-900"
                                            style="font-weight: 14px;">
                                            Temukan informasi mengenai tempat wisata di Jawa Barat yang wajib
                                            dikunjungi.
                                        </p>
                                    </a>
                                </li>
                            </ul>
                        </section>
                    </div>
                </div>
                <div class="col-12 col-md-3 order-2 order-md-1">
                    <section class="overflow-hidden order-md-1" style="border-radius: 0.375rem;">
                        <div class="d-flex flex-column gap-1 bg-green-700 px-4 pt-1 pb-2 text-white">
                            <h4 style=" font-size: 1.25rem;line-height: 2;font-weight: 700;">
                                Agenda Jawa Barat
                            </h4>
                            <p style="font-size: 0.75rem;line-height: 1.25rem;">
                                Dapatkan informasi terkait semua kegiatan yang dilakukan di Jawa Barat.
                            </p>
                        </div>
                        <div
                            class="rounded-br-md rounded-bl-md flex-grow-0 bg-white border border-blue-gray-50 overflow-hidden">
                            <div class="bg-white d-flex flex-column gap-1 pt-3">
                                <div class="px-4">
                                    <p class="font-roboto font-medium mb-1">
                                        November 2023
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        Minggu ke 5
                                    </p>
                                </div>
                                <div class="d-flex align-items-center text-center px-2">
                                    <div class="keen-slider flex-grow-1">
                                        <div class="keen-slider__slide group cursor-pointer text-center d-flex flex-column mx-auto align-items-center content-calendar transition-colors ease-brand duration-250 hover:bg-green-50"
                                            style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="uppercase leading-3 mb-1 font-bold" style="font-size: 10px;">
                                                Sen
                                            </div>
                                            <div class="font-roboto font-medium leading-none font-bold">
                                                27
                                            </div>
                                        </div>
                                    </div>
                                    <div class="keen-slider flex-grow-1">
                                        <div class="keen-slider__slide group cursor-pointer text-center d-flex flex-column mx-auto align-items-center content-calendar transition-colors ease-brand duration-250 hover:bg-green-50"
                                            style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="uppercase leading-3 mb-1 font-bold" style="font-size: 10px;">
                                                Sen
                                            </div>
                                            <div class="font-roboto font-medium leading-none font-bold">
                                                27
                                            </div>
                                        </div>
                                    </div>
                                    <div class="keen-slider flex-grow-1">
                                        <div class="keen-slider__slide group cursor-pointer text-center d-flex flex-column mx-auto align-items-center content-calendar transition-colors ease-brand duration-250 hover:bg-green-50"
                                            style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="uppercase leading-3 mb-1 font-bold" style="font-size: 10px;">
                                                Sen
                                            </div>
                                            <div class="font-roboto font-medium leading-none font-bold">
                                                27
                                            </div>
                                        </div>
                                    </div>
                                    <div class="keen-slider flex-grow-1">
                                        <div class="keen-slider__slide group cursor-pointer text-center d-flex flex-column mx-auto align-items-center content-calendar transition-colors ease-brand duration-250 hover:bg-green-50"
                                            style="transform: translate3d(0px, 0px, 0px);">
                                            <div class="uppercase leading-3 mb-1 font-bold" style="font-size: 10px;">
                                                Sen
                                            </div>
                                            <div class="font-roboto font-medium leading-none font-bold">
                                                27
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="bg-white d-flex flex-column align-items-center justify-content-center overflow-hidden"
                                    style="height: 470px; margin-left: 1.25rem; margin-right: 1rem;">
                                    <div class="w-100 d-flex flex-column flex-grow-0"
                                        style="overflow-y: hidden; padding-top: 0.25rem; padding-right: 0.8rem;">
                                        <div>
                                            <div>
                                                <div class="d-flex gap-1">
                                                    <div class="d-flex gap-1 mb-4 w-100 relative cursor-pointer">
                                                        <!-- <div>
                                                                <div class="position-relative" style="padding-left: 0.25rem;">
                                                                    <div
                                                                        class=" relative bg-green-700" style="z-index: 10; width: 0.25rem; height: 0.25rem; border-radius: 100%;">
                                                                    </div>
                                                                </div>
                                                                <div class="position-absolute border-start border-green-700" style="height: 112px; bottom: 88px; left: 0.5rem;"></div>
                                                            </div> -->
                                                        <div
                                                            class="d-flex gap-1 w-100 px-3 py-2 rounded-lg transition-colors ease-brand duration-250 bg-green-50 bg-opacity-50 border border-green-700">
                                                            <div
                                                                class="d-flex flex-column gap-2 w-100 justify-content-center">
                                                                <p
                                                                    class="text-truncate text-sm font-roboto font-medium text-green-700">
                                                                    Silaturahmi Keluarga Pahlawan Nasional Almarhum
                                                                    KH.
                                                                    Abdul
                                                                    Chalim dan Membuka Sarasehan Hari Pahlawan Tahun
                                                                    2023
                                                                </p>
                                                                <p
                                                                    class="text-truncate text-xs px-2 py-1 rounded-md self-start capitalize text-green-700 bg-green-100 bg-opacity-40">
                                                                    PJ Gubernur
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p
                                                                        class="text-truncate text-xs whitespace-nowrap text-green-700">
                                                                        09:00 - 10:00 WIB
                                                                    </p>
                                                                    <p
                                                                        class="text-truncate text-xs whitespace-nowrap text-green-700">
                                                                        Telah selesai
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="v-portal" style="display: none;"></div>
                                                </div>
                                                <div class="d-flex gap-1">
                                                    <div class="d-flex gap-1 mb-4 w-100 relative cursor-pointer">
                                                        <!-- <div>
                                                                <div class="position-relative" style="padding-left: 0.25rem;">
                                                                    <div
                                                                        class=" relative bg-green-700" style="z-index: 10; width: 0.25rem; height: 0.25rem; border-radius: 100%;">
                                                                    </div>
                                                                </div>
                                                                <div class="position-absolute border-start border-green-700" style="height: 112px; bottom: 88px; left: 0.5rem;"></div>
                                                            </div> -->
                                                        <div
                                                            class="d-flex gap-1 w-100 px-3 py-2 rounded-lg transition-colors ease-brand duration-250 bg-green-50 bg-opacity-50 border border-green-700">
                                                            <div
                                                                class="d-flex flex-column gap-2 w-100 justify-content-center">
                                                                <p
                                                                    class="text-truncate text-sm font-roboto font-medium text-green-700">
                                                                    Silaturahmi Keluarga Pahlawan Nasional Almarhum
                                                                    KH.
                                                                    Abdul
                                                                    Chalim dan Membuka Sarasehan Hari Pahlawan Tahun
                                                                    2023
                                                                </p>
                                                                <p
                                                                    class="text-truncate text-xs px-2 py-1 rounded-md self-start capitalize text-green-700 bg-green-100 bg-opacity-40">
                                                                    PJ Gubernur
                                                                </p>
                                                                <div class="d-flex justify-content-between">
                                                                    <p
                                                                        class="text-truncate text-xs whitespace-nowrap text-green-700">
                                                                        09:00 - 10:00 WIB
                                                                    </p>
                                                                    <p
                                                                        class="text-truncate text-xs whitespace-nowrap text-green-700">
                                                                        Telah selesai
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="v-portal" style="display: none;"></div>
                                                </div>
                                            </div>
                                            <div class="observer"></div>
                                        </div>
                                    </div>
                                    <a href="/agenda-jawa-barat"
                                        class="d-flex justify-content-center py-1 border-t border-gray-100">
                                        <button
                                            class="d-flex justify-content-between align-items-center ku-button px-2 font-sans-1 ku-button--tertiary-paddingless"
                                            tabindex="-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin text-white"
                                                style="display: none; margin-left: -0.25rem; height: 1rem;width: 1rem;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25">
                                                </circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75"></path>
                                            </svg>
                                            Lihat Semua Agenda
                                            <div class="d-flex justify-content-center ps-2 mt-1 align-items-center"
                                                style="width: 12px; height: 12px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 12px; height: 12px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M15.3333 16.2222H4.66667C4.17778 16.2222 3.77778 15.8222 3.77778 15.3333V4.66667C3.77778 4.17778 4.17778 3.77778 4.66667 3.77778H9.11111C9.6 3.77778 10 3.37778 10 2.88889C10 2.4 9.6 2 9.11111 2H3.77778C3.30628 2 2.8541 2.1873 2.5207 2.5207C2.1873 2.8541 2 3.30628 2 3.77778V16.2222C2 17.2 2.8 18 3.77778 18H16.2222C17.2 18 18 17.2 18 16.2222V10.8889C18 10.4 17.6 10 17.1111 10C16.6222 10 16.2222 10.4 16.2222 10.8889V15.3333C16.2222 15.8222 15.8222 16.2222 15.3333 16.2222ZM11.7778 2.88889C11.7778 3.37778 12.1778 3.77778 12.6667 3.77778H14.9689L6.85333 11.8933C6.68713 12.0595 6.59376 12.285 6.59376 12.52C6.59376 12.755 6.68713 12.9805 6.85333 13.1467C7.01954 13.3129 7.24495 13.4062 7.48 13.4062C7.71505 13.4062 7.94046 13.3129 8.10667 13.1467L16.2222 5.03111V7.33333C16.2222 7.82222 16.6222 8.22222 17.1111 8.22222C17.6 8.22222 18 7.82222 18 7.33333V2.88889C18 2.4 17.6 2 17.1111 2H12.6667C12.1778 2 11.7778 2.4 11.7778 2.88889Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="bg-white py-4 featured-program--container">
    <div class="container mx-auto px-3 ">
        <div class="d-flex flex-column flex-xl-row align-items-center gap-2 mb-1">
            <h2 class="header-section-news">
                Transparansi Keuangan Daerah
            </h2>
            <div class="d-flex justify-content-center flex-column text-center" style="flex: 1 1 0%;">
                <p style="color: #083461;">
                    Menyajikan Publikasi Kinerja Keuangan Daerah Provinsi Jawa Barat
                </p>
            </div>
            <a href="/arsip-dan-dokumen?kategori=transparansi%20pengelolaan%20keuangan%20daerah" tabindex="-1">
                <button class="d-flex justify-content-between ku-button font-sans-1 ku-button--secondary">
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
                    <div class="d-flex justify-content-center align-items-center mt-2 ms-2"
                        style="width:14px;height:14px;">
                        <i class="ku-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
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
        <div class="position-relative featured-program">
            <div class="swiper mySwiperLaporan swiper-container-initialized swiper-container-horizontal" style="
                height: 28rem;
            ">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-2 group p-3 rounded-xl border border-gray-200 border-green-700 shadow transition-colors ease-brand duration-250"
                            style="height: 372px; min-width: 282px;">
                            <div class="bg-gray-50 border rounded-lg d-flex justify-content-center align-items-center"
                                style="height: 120px;">
                                <figure class="d-flex justify-conten-center align-items-center"
                                    style="width: 80px; height: 80px;"><img src="{{ asset('template-user/icon/pdf.svg')}}"
                                        alt="Pergub Penjabaran Perubahan APBD Tahun 2022" width="80" height="80"
                                        class="min-w-full min-h-full object-contain"></figure>
                            </div>
                            <section class="d-flex flex-column gap-2">
                                <p class="text-xs">
                                    Transparansi Pengelolaan Keuangan Daerah
                                </p>
                                <h3 class="font-bold text-lg tline-clamp-1 group-hover:text-green-700">
                                    Pergub Penjabaran Perubahan APBD Tahun 2022
                                </h3>
                                <p class="text-sm line-clamp-3 text-blue-gray-800 group-hover:text-blue-gray-900">
                                    Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh
                                    Gubernur
                                    untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau
                                    dalam
                                    menyelenggarakan kewenangan pemerintah daerah terkait penjabaran perubahan
                                    Anggaran
                                    Pendapatan dan Belanja Daerah tahun 2022
                                </p>
                            </section>
                            <section class="row" style="height: fit-content;">
                                <div class="col-6">
                                    <button
                                        class="d-flex justify-content-between w-100 justify-content-center ku-button font-sans-1 ku-button--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                class="opacity-25"></circle>
                                            <path fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                class="opacity-75">
                                            </path>
                                        </svg>
                                        <div class="d-flex justify-conten-center mt-2 align-items-center"
                                            style="width: 18px; height: 18px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                                    </path>
                                                    <path
                                                        d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                        Lihat
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="https://file.jabarprov.go.id/live/media/docs/archives/1695776458-PERGUB-PAPBD-JABAR-NO-98-TAHUN-2022.pdf"
                                        target="_blank" rel="noreferrer"
                                        title="Pergub Penjabaran Perubahan APBD Tahun 2022" download="">
                                        <button
                                            class="d-flex justify-content-between w-100 justify-conten-center ku-button font-sans-1 ku-button--primary">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25"></circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75">
                                                </path>
                                            </svg>
                                            <div class="d-flex justify-conten-center mt-2 align-items-center"
                                                style="width: 18px; height: 18px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                            Unduh
                                        </button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-2 group p-3 rounded-xl border border-gray-200 border-green-700 shadow transition-colors ease-brand duration-250"
                            style="height: 372px; min-width: 282px;">
                            <div class="bg-gray-50 border rounded-lg d-flex justify-content-center align-items-center"
                                style="height: 120px;">
                                <figure class="d-flex justify-conten-center align-items-center"
                                    style="width: 80px; height: 80px;"><img src="{{ asset('template-user/icon/pdf.svg')}}"
                                        alt="Pergub Penjabaran Perubahan APBD Tahun 2022" width="80" height="80"
                                        class="min-w-full min-h-full object-contain"></figure>
                            </div>
                            <section class="d-flex flex-column gap-2">
                                <p class="text-xs">
                                    Transparansi Pengelolaan Keuangan Daerah
                                </p>
                                <h3 class="font-bold text-lg tline-clamp-1 group-hover:text-green-700">
                                    Pergub Penjabaran Perubahan APBD Tahun 2022
                                </h3>
                                <p class="text-sm line-clamp-3 text-blue-gray-800 group-hover:text-blue-gray-900">
                                    Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh
                                    Gubernur
                                    untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau
                                    dalam
                                    menyelenggarakan kewenangan pemerintah daerah terkait penjabaran perubahan
                                    Anggaran
                                    Pendapatan dan Belanja Daerah tahun 2022
                                </p>
                            </section>
                            <section class="row" style="height: fit-content;">
                                <div class="col-6">
                                    <button
                                        class="d-flex justify-content-between w-100 justify-content-center ku-button font-sans-1 ku-button--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                class="opacity-25"></circle>
                                            <path fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                class="opacity-75">
                                            </path>
                                        </svg>
                                        <div class="d-flex justify-conten-center mt-2 align-items-center"
                                            style="width: 18px; height: 18px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                                    </path>
                                                    <path
                                                        d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                        Lihat
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="https://file.jabarprov.go.id/live/media/docs/archives/1695776458-PERGUB-PAPBD-JABAR-NO-98-TAHUN-2022.pdf"
                                        target="_blank" rel="noreferrer"
                                        title="Pergub Penjabaran Perubahan APBD Tahun 2022" download="">
                                        <button
                                            class="d-flex justify-content-between w-100 justify-conten-center ku-button font-sans-1 ku-button--primary">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25"></circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75">
                                                </path>
                                            </svg>
                                            <div class="d-flex justify-conten-center mt-2 align-items-center"
                                                style="width: 18px; height: 18px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                            Unduh
                                        </button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-2 group p-3 rounded-xl border border-gray-200 border-green-700 shadow transition-colors ease-brand duration-250"
                            style="height: 372px; min-width: 282px;">
                            <div class="bg-gray-50 border rounded-lg d-flex justify-content-center align-items-center"
                                style="height: 120px;">
                                <figure class="d-flex justify-conten-center align-items-center"
                                    style="width: 80px; height: 80px;"><img src="{{ asset('template-user/icon/pdf.svg')}}"
                                        alt="Pergub Penjabaran Perubahan APBD Tahun 2022" width="80" height="80"
                                        class="min-w-full min-h-full object-contain"></figure>
                            </div>
                            <section class="d-flex flex-column gap-2">
                                <p class="text-xs">
                                    Transparansi Pengelolaan Keuangan Daerah
                                </p>
                                <h3 class="font-bold text-lg tline-clamp-1 group-hover:text-green-700">
                                    Pergub Penjabaran Perubahan APBD Tahun 2022
                                </h3>
                                <p class="text-sm line-clamp-3 text-blue-gray-800 group-hover:text-blue-gray-900">
                                    Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh
                                    Gubernur
                                    untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau
                                    dalam
                                    menyelenggarakan kewenangan pemerintah daerah terkait penjabaran perubahan
                                    Anggaran
                                    Pendapatan dan Belanja Daerah tahun 2022
                                </p>
                            </section>
                            <section class="row" style="height: fit-content;">
                                <div class="col-6">
                                    <button
                                        class="d-flex justify-content-between w-100 justify-content-center ku-button font-sans-1 ku-button--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                class="opacity-25"></circle>
                                            <path fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                class="opacity-75">
                                            </path>
                                        </svg>
                                        <div class="d-flex justify-conten-center mt-2 align-items-center"
                                            style="width: 18px; height: 18px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                                    </path>
                                                    <path
                                                        d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                        Lihat
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="https://file.jabarprov.go.id/live/media/docs/archives/1695776458-PERGUB-PAPBD-JABAR-NO-98-TAHUN-2022.pdf"
                                        target="_blank" rel="noreferrer"
                                        title="Pergub Penjabaran Perubahan APBD Tahun 2022" download="">
                                        <button
                                            class="d-flex justify-content-between w-100 justify-conten-center ku-button font-sans-1 ku-button--primary">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25"></circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75">
                                                </path>
                                            </svg>
                                            <div class="d-flex justify-conten-center mt-2 align-items-center"
                                                style="width: 18px; height: 18px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                            Unduh
                                        </button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-2 group p-3 rounded-xl border border-gray-200 border-green-700 shadow transition-colors ease-brand duration-250"
                            style="height: 372px; min-width: 282px;">
                            <div class="bg-gray-50 border rounded-lg d-flex justify-content-center align-items-center"
                                style="height: 120px;">
                                <figure class="d-flex justify-conten-center align-items-center"
                                    style="width: 80px; height: 80px;"><img src="{{ asset('template-user/icon/pdf.svg')}}"
                                        alt="Pergub Penjabaran Perubahan APBD Tahun 2022" width="80" height="80"
                                        class="min-w-full min-h-full object-contain"></figure>
                            </div>
                            <section class="d-flex flex-column gap-2">
                                <p class="text-xs">
                                    Transparansi Pengelolaan Keuangan Daerah
                                </p>
                                <h3 class="font-bold text-lg tline-clamp-1 group-hover:text-green-700">
                                    Pergub Penjabaran Perubahan APBD Tahun 2022
                                </h3>
                                <p class="text-sm line-clamp-3 text-blue-gray-800 group-hover:text-blue-gray-900">
                                    Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh
                                    Gubernur
                                    untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau
                                    dalam
                                    menyelenggarakan kewenangan pemerintah daerah terkait penjabaran perubahan
                                    Anggaran
                                    Pendapatan dan Belanja Daerah tahun 2022
                                </p>
                            </section>
                            <section class="row" style="height: fit-content;">
                                <div class="col-6">
                                    <button
                                        class="d-flex justify-content-between w-100 justify-content-center ku-button font-sans-1 ku-button--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                class="opacity-25"></circle>
                                            <path fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                class="opacity-75">
                                            </path>
                                        </svg>
                                        <div class="d-flex justify-conten-center mt-2 align-items-center"
                                            style="width: 18px; height: 18px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                                    </path>
                                                    <path
                                                        d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                        Lihat
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="https://file.jabarprov.go.id/live/media/docs/archives/1695776458-PERGUB-PAPBD-JABAR-NO-98-TAHUN-2022.pdf"
                                        target="_blank" rel="noreferrer"
                                        title="Pergub Penjabaran Perubahan APBD Tahun 2022" download="">
                                        <button
                                            class="d-flex justify-content-between w-100 justify-conten-center ku-button font-sans-1 ku-button--primary">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25"></circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75">
                                                </path>
                                            </svg>
                                            <div class="d-flex justify-conten-center mt-2 align-items-center"
                                                style="width: 18px; height: 18px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                            Unduh
                                        </button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="d-flex flex-column gap-2 group p-3 rounded-xl border border-gray-200 border-green-700 shadow transition-colors ease-brand duration-250"
                            style="height: 372px; min-width: 282px;">
                            <div class="bg-gray-50 border rounded-lg d-flex justify-content-center align-items-center"
                                style="height: 120px;">
                                <figure class="d-flex justify-conten-center align-items-center"
                                    style="width: 80px; height: 80px;"><img src="{{ asset('template-user/icon/pdf.svg')}}"
                                        alt="Pergub Penjabaran Perubahan APBD Tahun 2022" width="80" height="80"
                                        class="min-w-full min-h-full object-contain"></figure>
                            </div>
                            <section class="d-flex flex-column gap-2">
                                <p class="text-xs">
                                    Transparansi Pengelolaan Keuangan Daerah
                                </p>
                                <h3 class="font-bold text-lg tline-clamp-1 group-hover:text-green-700">
                                    Pergub Penjabaran Perubahan APBD Tahun 2022
                                </h3>
                                <p class="text-sm line-clamp-3 text-blue-gray-800 group-hover:text-blue-gray-900">
                                    Peraturan perundang-undangan yang bersifat pengaturan yang ditetapkan oleh
                                    Gubernur
                                    untuk menjalankan perintah peraturan perundang-undangan yang lebih tinggi atau
                                    dalam
                                    menyelenggarakan kewenangan pemerintah daerah terkait penjabaran perubahan
                                    Anggaran
                                    Pendapatan dan Belanja Daerah tahun 2022
                                </p>
                            </section>
                            <section class="row" style="height: fit-content;">
                                <div class="col-6">
                                    <button
                                        class="d-flex justify-content-between w-100 justify-content-center ku-button font-sans-1 ku-button--secondary">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                class="opacity-25"></circle>
                                            <path fill="currentColor"
                                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                class="opacity-75">
                                            </path>
                                        </svg>
                                        <div class="d-flex justify-conten-center mt-2 align-items-center"
                                            style="width: 18px; height: 18px;">
                                            <i class="ku-icon">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                    style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                    <path
                                                        d="M10.0008 12.3999C11.3263 12.3999 12.4008 11.3254 12.4008 9.99996C12.4008 8.67448 11.3263 7.59998 10.0008 7.59998C8.67532 7.59998 7.60081 8.67448 7.60081 9.99996C7.60081 11.3254 8.67532 12.3999 10.0008 12.3999Z">
                                                    </path>
                                                    <path
                                                        d="M18.8071 9.34746C17.8149 7.81297 16.5275 6.50948 15.0845 5.57761C13.4882 4.54562 11.7257 4 9.98793 4C8.39345 4 6.82558 4.45562 5.32784 5.35412C3.80048 6.27023 2.41674 7.6086 1.21487 9.33171C1.07919 9.52645 1.00447 9.75713 1.00019 9.99443C0.995921 10.2317 1.06229 10.465 1.19087 10.6645C2.18124 12.2143 3.45586 13.5197 4.87635 14.4388C6.47571 15.4749 8.19695 15.9999 9.98793 15.9999C11.7395 15.9999 13.5058 15.4588 15.0954 14.4354C16.5376 13.5066 17.8224 12.1982 18.8109 10.651C18.935 10.4561 19.0007 10.2297 19 9.99866C18.9993 9.76761 18.9324 9.54161 18.8071 9.34746V9.34746ZM10.0007 13.5999C9.28868 13.5999 8.59266 13.3888 8.00065 12.9932C7.40863 12.5977 6.94722 12.0354 6.67474 11.3776C6.40227 10.7198 6.33098 9.99596 6.46988 9.29764C6.60879 8.59931 6.95165 7.95786 7.45512 7.45439C7.95858 6.95093 8.60004 6.60806 9.29836 6.46916C9.99669 6.33025 10.7205 6.40154 11.3783 6.67402C12.0361 6.94649 12.5984 7.40791 12.994 7.99992C13.3895 8.59193 13.6007 9.28795 13.6007 9.99996C13.5996 10.9544 13.2199 11.8694 12.545 12.5443C11.8702 13.2192 10.9551 13.5988 10.0007 13.5999V13.5999Z">
                                                    </path>
                                                </svg>
                                            </i>
                                        </div>
                                        Lihat
                                    </button>
                                </div>
                                <div class="col-6">
                                    <a href="https://file.jabarprov.go.id/live/media/docs/archives/1695776458-PERGUB-PAPBD-JABAR-NO-98-TAHUN-2022.pdf"
                                        target="_blank" rel="noreferrer"
                                        title="Pergub Penjabaran Perubahan APBD Tahun 2022" download="">
                                        <button
                                            class="d-flex justify-content-between w-100 justify-conten-center ku-button font-sans-1 ku-button--primary">

                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                class="animate-spin -ml-1 h-4 w-4 text-white" style="display: none;">
                                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"
                                                    class="opacity-25"></circle>
                                                <path fill="currentColor"
                                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"
                                                    class="opacity-75">
                                                </path>
                                            </svg>
                                            <div class="d-flex justify-conten-center mt-2 align-items-center"
                                                style="width: 18px; height: 18px;">
                                                <i class="ku-icon">
                                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                                        xmlns="http://www.w3.org/2000/svg" class="ku-icon__svg"
                                                        style="width: 18px; height: 18px; transform: rotate(0deg); fill: currentcolor;">
                                                        <path
                                                            d="M9.1009 2.80028C8.6204 2.80024 8.14475 2.8964 7.70199 3.08308C7.25923 3.26977 6.85833 3.5432 6.52291 3.88726C6.18748 4.23132 5.92433 4.63905 5.74897 5.08641C5.5736 5.53377 5.48957 6.01171 5.50182 6.49206C5.50664 6.69523 5.44255 6.89404 5.31999 7.05615C5.19743 7.21825 5.02361 7.33411 4.82683 7.38485C4.19236 7.55105 3.64001 7.94237 3.2728 8.48581C2.9056 9.02925 2.74861 9.68772 2.83113 10.3384C2.91365 10.989 3.23003 11.5875 3.72127 12.022C4.21251 12.4566 4.84505 12.6977 5.50092 12.7002H6.40092C6.63961 12.7002 6.86853 12.795 7.03731 12.9638C7.20609 13.1326 7.30091 13.3615 7.30091 13.6002C7.30091 13.8389 7.20609 14.0678 7.03731 14.2366C6.86853 14.4054 6.63961 14.5002 6.40092 14.5002H5.50092C4.4644 14.5004 3.45959 14.1428 2.65627 13.4878C1.85295 12.8328 1.30038 11.9205 1.09194 10.9052C0.883494 9.88984 1.03196 8.83367 1.51224 7.91514C1.99252 6.9966 2.77516 6.27203 3.72793 5.86386C3.84143 4.72633 4.313 3.65417 5.07475 2.80176C5.83649 1.94935 6.84911 1.36068 7.96677 1.12051C9.08444 0.880349 10.2495 1.00108 11.2942 1.46533C12.3388 1.92957 13.2092 2.71338 13.78 3.70388C15.1927 3.75529 16.5289 4.35864 17.5017 5.38436C18.4745 6.41008 19.0063 7.77638 18.9828 9.18984C18.9594 10.6033 18.3826 11.9512 17.3763 12.9441C16.37 13.937 15.0145 14.4957 13.6009 14.5002C13.3622 14.5002 13.1333 14.4054 12.9645 14.2366C12.7957 14.0678 12.7009 13.8389 12.7009 13.6002C12.7009 13.3615 12.7957 13.1326 12.9645 12.9638C13.1333 12.795 13.3622 12.7002 13.6009 12.7002C14.0856 12.6995 14.5652 12.6009 15.011 12.4103C15.4567 12.2198 15.8593 11.9411 16.1947 11.5912C16.5301 11.2412 16.7914 10.8271 16.9629 10.3737C17.1343 9.92025 17.2125 9.43688 17.1926 8.95253C17.1727 8.46819 17.0552 7.99286 16.8471 7.55503C16.6391 7.11721 16.3447 6.72591 15.9817 6.40462C15.6188 6.08332 15.1946 5.83864 14.7348 5.68525C14.2749 5.53186 13.7889 5.47292 13.3057 5.51197C13.1182 5.52721 12.9306 5.48332 12.7693 5.38647C12.6081 5.28961 12.4812 5.14465 12.4066 4.97197C12.1276 4.32688 11.666 3.77752 11.0786 3.39163C10.4912 3.00573 9.80372 2.80017 9.1009 2.80028V2.80028ZM10.0009 8.20025C10.2396 8.20025 10.4685 8.29507 10.6373 8.46385C10.8061 8.63264 10.9009 8.86155 10.9009 9.10025V15.9276L11.1646 15.6639C11.3343 15.5 11.5617 15.4093 11.7977 15.4113C12.0336 15.4134 12.2594 15.508 12.4262 15.6749C12.5931 15.8417 12.6877 16.0675 12.6898 16.3034C12.6918 16.5394 12.6011 16.7668 12.4372 16.9365L10.6372 18.7365C10.4684 18.9052 10.2395 19 10.0009 19C9.76225 19 9.53338 18.9052 9.3646 18.7365L7.56461 16.9365C7.47865 16.8535 7.41009 16.7542 7.36292 16.6444C7.31575 16.5346 7.29093 16.4165 7.28989 16.297C7.28885 16.1775 7.31162 16.059 7.35687 15.9484C7.40213 15.8377 7.46895 15.7373 7.55346 15.6528C7.63796 15.5683 7.73845 15.5014 7.84905 15.4562C7.95966 15.4109 8.07817 15.3881 8.19767 15.3892C8.31717 15.3902 8.43527 15.4151 8.54507 15.4622C8.65487 15.5094 8.75418 15.578 8.83721 15.6639L9.1009 15.9276V9.10025C9.1009 8.86155 9.19572 8.63264 9.36451 8.46385C9.53329 8.29507 9.76221 8.20025 10.0009 8.20025V8.20025Z">
                                                        </path>
                                                    </svg>
                                                </i>
                                            </div>
                                            Unduh
                                        </button>
                                    </a>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>

        </div>
</section>

<section class="bg-white py-3">
    <div class="container mx-auto px-5">
        <div class="row">
            <div class="col-12 col-md-4">
                <h2 class="text-2xl text-left md:text-4xl font-medium leading-loose">
                    Akses Cepat
                </h2>
                <p class="text-left text-sm text-gray-600 leading-6">
                    Dapatkan kemudahaan akses ke beberapa layanan Pemerintah Provinsi Jawa Barat untuk kebutuhan
                    Anda.
                </p>
            </div>
            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="http://suara.jabarprov.go.id/" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4">
                        <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Surat Jabar Juara.svg"
                            width="40" height="40" alt="Surat Jabar Juara" class="lazy-img w-fit h-10"
                            data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Surat Jabar Juara.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Surat Jabar Juara
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Kirim Surat untuk Gubernur dan Perangkat Daerah
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="https://dpmptsp.jabarprov.go.id/mppdigital/" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4">
                        <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/pmptsp.svg" width="40"
                            height="40" alt="Mall Pelayanan Publik Digital" class="lazy-img w-fit h-10"
                            data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/pmptsp.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Mall Pelayanan Publik Digital
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Lakukan aktivitas pengajuan perizinan secara virtual, kapanpun dan dimanapun melalui
                            Mall
                            Pelayanan Publik Digital di Jawa Barat.
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="https://cekbansos.kemensos.go.id" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4"><img
                            src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Orang.svg" width="40"
                            height="40" alt="Cek Bantuan Sosial" class="lazy-img w-fit h-10" data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Orang.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Cek Bantuan Sosial
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Pencarian data Penerima Manfaat terkait bantuan sosial yang diselenggarakan Kemensos
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="http://silinda.jabarprov.go.id/komoditas" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4"><img
                            src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Pangan.svg" width="40"
                            height="40" alt="Info Harga Komoditas Pangan" class="lazy-img w-fit h-10" data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Pangan.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Info Harga Komoditas Pangan
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Dapatkan info harga rata-rata komoditas harian di daerah sekitar Jawa Barat.
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="https://opendata.jabarprov.go.id/id" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4">
                        <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Open Data.svg" width="40"
                            height="40" alt="Open Data" class="lazy-img w-fit h-10" data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Open Data.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Open Data
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Portal transparansi data dan informasi publik bagi warga Jawa Barat
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="http://saberpungli.jabarprov.go.id" target="_blank" rel="noreferrer"
                        class="flex flex-col gap-4"><img
                            src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Saber Pungli.svg" width="40"
                            height="40" alt="Saber Pungli" class="lazy-img w-fit h-10" data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Saber Pungli.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Saber Pungli
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Laporkan segala aktivitas Pungutan Liar (Pungli) di sekitarmu!
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="https://inspektorat.jabarprov.go.id/sarana-pengaduan-masyarakat" target="_blank"
                        rel="noreferrer" class="flex flex-col gap-4">
                        <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Pengaduan Layanan.svg"
                            width="40" height="40" alt="Laporan Pengaduan Masyarakat" class="lazy-img w-fit h-10"
                            data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Pengaduan Layanan.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Laporan Pengaduan Masyarakat
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Sarana penyampaian aspirasi dan pengaduan masyarakat Jawa Barat
                        </p>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="group px-4 py-3 rounded-md hover:bg-green-50 transition-colors ease-brand duration-250">
                    <a href="https://ppid.jabarprov.go.id/page/5689-Prosedur-Peringatan-Dini-dan-Prosedur-Evakuasi-Keadaan-Darurat"
                        target="_blank" rel="noreferrer" class="flex flex-col gap-4">
                        <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Ekologi.svg" width="40"
                            height="40" alt="Prosedur Peringatan Dini dan Darurat" class="lazy-img w-fit h-10"
                            data-v-f68829c0=""
                            data-src="https://dvgddkosknh6r.cloudfront.net/live/media/img/logos/Ekologi.svg"
                            lazy="loaded">
                        <p class="font-roboto font-bold group-hover:text-green-700">
                            Prosedur Peringatan Dini dan Darurat
                        </p>
                        <p class="text-sm text-gray-600 leading-6 group-hover:text-blue-gray-800 focus:outline-none">
                            Prosedur Peringatan Dini dan Prosedur Evakuasi Keadaan Darurat Bencana Alam
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>

@endsection
