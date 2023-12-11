@extends('layout/v_template')

@section('content')
<div class="position-relative">
    <main>
        <section class="position-relative w-100"
            style="background-image:radial-gradient(56.33% 56.33% at 50.59% 43.67%, rgba(0, 23, 28, 0.5) 0%, rgba(0, 11, 14, 0.7) 46.15%, rgba(0, 11, 14, 0.82) 100%), url('https://jabarprov.go.id/images/jumbotron/default.webp'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container mx-auto px-5 position-relative pt-24 pb-40 z-10"
                style="padding-top: 6rem; padding-bottom: 10rem;">
                <section class="mb-6">
                    <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);"
                        aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Library</li>
                        </ol>
                    </nav>
                </section>
                <h3 class="font-lora fw-bold text-white">
                    Program Unggulan
                </h3>
                <div>
                    <h6 class="font-lato fw-normal text-white line-clamp-3">
                        Dapatkan informasi mengenai program-program unggulan dari Pemerintah Daerah Provinsi Jawa Barat.
                    </h6>
                </div>
            </div>
        </section>
        <section class="w-100 bg-light">
            <div class="container mx-auto px-5 position-relative -top-24" style="top: -6rem;z-index: 20;">
                <div class="p-3 py-4 rounded bg-white d-flex flex-column gap-4" style="min-height: 377px;">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="dropdown">
                                <button class="btn btn-fill-white py-2 dropdown-toggle" type="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Pilih Kategori
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="ProgramUnggulan.html?category=name">Action</a>
                                    </li>
                                    <li><a class="dropdown-item" href="ProgramUnggulan.html?category=name">Another
                                            action</a></li>
                                    <li><a class="dropdown-item" href="ProgramUnggulan.html?category=name">Something
                                            else here</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <form
                                class="position-relative d-flex align-items-center gap-2 rounded border border-light bg-white w-100 shadow mx-auto"
                                style="padding: 6px 9px;">
                                <div class="d-flex justify-content-center align-items-center text-black-50"
                                    style="width:16px;height:16px;">
                                    <i>
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor"
                                            xmlns="http://www.w3.o"
                                            style="width: 16px; height: 16px; transform: rotate(0deg); fill:
                                                currentcolor;">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M13.1841 15.0024C11.9231 15.9004 10.3804 16.4286 8.71429 16.4286C4.4538 16.4286 1 12.9748 1 8.71429C1 4.4538 4.4538 1 8.71429 1C12.9748 1 16.4286 4.4538 16.4286 8.71429C16.4286 10.3804 15.9004 11.9231 15.0024 13.1841L18.6234 16.8051C19.1255 17.3073 19.1255 18.1213 18.6234 18.6234C18.1213 19.1255 17.3073 19.1255 16.8051 18.6234L13.1841 15.0024ZM13.8571 8.71429C13.8571 11.5546 11.5546 13.8571 8.71429 13.8571C5.87396 13.8571 3.57143 11.5546 3.57143 8.71429C3.57143 5.87396 5.87396 3.57143 8.71429 3.57143C11.5546 3.57143 13.8571 5.87396 13.8571 8.71429Z">
                                            </path>
                                        </svg>
                                    </i>
                                </div>
                                <input type="text" aria-label="Kolom Pencarian" class="w-100 flex-grow-0 input-hero"
                                    value="" style="border: none; min-width: 0;">
                            </form>
                        </div>
                    </div>

                    <section>
                        <div class="row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="list-card gap-4 p-4 rounded ease-brand duration-250"
                                    style="height: fit-content;">
                                    <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690280849-Logo.png"
                                        width="32" height="32" alt="Jabar Saber Hoaks" class="lazy-img"
                                        lazy="loaded">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer">
                                        <h5 class="fw-bold mt-3 text-truncate">
                                            Sistem Informasi Data Kependudukan (SIDATUK)
                                        </h5>
                                    </a>
                                    <p class="text-truncate-2 mt-2">
                                        Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                                        aduan
                                        data administrasi kependudukan secara digital
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer" class="mt-2 d-flex align-items-center">
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
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="list-card gap-4 p-4 rounded ease-brand duration-250"
                                    style="height: fit-content;">
                                    <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690280849-Logo.png"
                                        width="32" height="32" alt="Jabar Saber Hoaks" class="lazy-img"
                                        lazy="loaded">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer">
                                        <h5 class="fw-bold mt-3 text-truncate">
                                            Sistem Informasi Data Kependudukan (SIDATUK)
                                        </h5>
                                    </a>
                                    <p class="text-truncate-2 mt-2">
                                        Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                                        aduan
                                        data administrasi kependudukan secara digital
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer" class="mt-2 d-flex align-items-center">
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
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="list-card gap-4 p-4 rounded ease-brand duration-250"
                                    style="height: fit-content;">
                                    <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690280849-Logo.png"
                                        width="32" height="32" alt="Jabar Saber Hoaks" class="lazy-img"
                                        lazy="loaded">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer">
                                        <h5 class="fw-bold mt-3 text-truncate">
                                            Sistem Informasi Data Kependudukan (SIDATUK)
                                        </h5>
                                    </a>
                                    <p class="text-truncate-2 mt-2">
                                        Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                                        aduan
                                        data administrasi kependudukan secara digital
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer" class="mt-2 d-flex align-items-center">
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
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="list-card gap-4 p-4 rounded ease-brand duration-250"
                                    style="height: fit-content;">
                                    <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690280849-Logo.png"
                                        width="32" height="32" alt="Jabar Saber Hoaks" class="lazy-img"
                                        lazy="loaded">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer">
                                        <h5 class="fw-bold mt-3 text-truncate">
                                            Sistem Informasi Data Kependudukan (SIDATUK)
                                        </h5>
                                    </a>
                                    <p class="text-truncate-2 mt-2">
                                        Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                                        aduan
                                        data administrasi kependudukan secara digital
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer" class="mt-2 d-flex align-items-center">
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
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="list-card gap-4 p-4 rounded ease-brand duration-250"
                                    style="height: fit-content;">
                                    <img src="https://dvgddkosknh6r.cloudfront.net/live/media/img/1690280849-Logo.png"
                                        width="32" height="32" alt="Jabar Saber Hoaks" class="lazy-img"
                                        lazy="loaded">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer">
                                        <h5 class="fw-bold mt-3 text-truncate">
                                            Sistem Informasi Data Kependudukan (SIDATUK)
                                        </h5>
                                    </a>
                                    <p class="text-truncate-2 mt-2">
                                        Fasilitas untuk mempermudah seluruh masyarakat Jawa Barat dalam menyampaikan
                                        aduan
                                        data administrasi kependudukan secara digital
                                    </p>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                        rel="noreferrer" class="mt-2 d-flex align-items-center">
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

                        </div>
                    </section>
                </div>
            </div>
        </section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Lorem</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Autem est ea accusamus, fugiat
                        provident doloribus id perspiciatis dicta totam aut unde, distinctio nostrum rerum, a ab quae
                        incidunt sint. Incidunt?
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection