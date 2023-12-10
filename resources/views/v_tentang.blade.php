@extends('layout/v_template')

@section('content')

<section id="hero-top-50" style="background: url('https://images.unsplash.com/photo-1646432581107-06cd4333cfde?q=80&w=1973&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="hero-cover">
            <div class="container">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="#">Beranda</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Tentang Kalimantan Utara</li>
                    </ol>
                </nav>
                <div class="hero-desc">
                    <p class="fs-3 font-title">Tentang Kalimantan Utara</p>
                    <p class="font-primary">Ketahui segalanya tentang Kalimantan Utara mulai dari pemerintahan, program, hingga kondisi terkini.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="content-about" class="container mb-5">
       <div class="row">
            <aside class="p-3 font-primary col-md-3">
                <nav class="nav flex-column">
                    <p class="fw-bold">Tentang Kalimantan Utara</p>
                        <a class="nav-link active" aria-current="page" href="#" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Visi Misi Pemprov</a>
                        <a class="nav-link" href="#" id="lambang-tab" data-bs-toggle="pill" data-bs-target="#pills-lambang" type="button" role="tab" aria-controls="pills-lambang" aria-selected="false">Lambang</a>
                        <a class="nav-link" href="#" id="sejarah-tab" data-bs-toggle="pill" data-bs-target="#pills-sejarah" type="button" role="tab" aria-controls="pills-sejarah" aria-selected="false">Sejarah Kaltara</a>
                        <a class="nav-link" href="#" id="pimpinan-tab" data-bs-toggle="pill" data-bs-target="#pills-pimpinan" type="button" role="tab" aria-controls="pills-pimpinan" aria-selected="false">Pimpinan Kaltara</a>

                    <p class="fw-bold">Struktur Pemerintahan</p>
                        <a class="nav-link" href="#" id="struktur-tab" data-bs-toggle="pill" data-bs-target="#pills-struktur" type="button" role="tab" aria-controls="pills-struktur" aria-selected="false">Struktur Perangkat Daerah</a>
                        <a class="nav-link" href="#" id="perangkat-tab" data-bs-toggle="pill" data-bs-target="#pills-perangkat" type="button" role="tab" aria-controls="pills-perangkat" aria-selected="false">Daftar Perangkat Daerah</a>

                    <p class="fw-bold">Pemerintah Daerah</p>
                        <a class="nav-link" href="#" id="pemda-tab" data-bs-toggle="pill" data-bs-target="#pills-pemda" type="button" role="tab" aria-controls="pills-pemda" aria-selected="false">Daftar Kabupaten / Kota</a>
                </nav>
            </aside>
            <div class="tab-content col-md-9 ps-4" id="v-pills-tabContent">
                <!-- TAB PERTAMA -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                    <p class="font-title fs-2 fw-bold text-blue">Visi Misi Pemerintahan Provinsi Jawa Barat 2018-2023</p>

                    <div class="row pt-5 align-items-center">
                        <div class="col-md-6">
                            <div class="img-land-wrapper">
                                <img src="https://images.unsplash.com/photo-1675349673331-5bd6398000b9?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="text-blue fs-3 font-title fw-bold">Visi</p>
                            <p class="font-primary fw-bold">"Terwujudnya Kalimantan Utara Juara Lahir Batin dengan Inovasi dan Kolaborasi"</p>
                            <p class="font-primary">Nilai religius, bahagia, adil, kolaboratif dan inovatif.</p>
                        </div>
                    </div>

                    <div class="row mt-5 p-4" style="background-color: whitesmoke; border-radius: 10px;">
                        <div class="col-md-8">
                            <p class="fw-bold fs-3 text-blue font-title lh-120 pb-3">Misi Pembangunan Kalimantan Utara</p>
                            <div class="visi-list font-primary">
                                <span class="fw-semibold">
                                    <p>1</p>
                                </span>
                                <div>
                                    <p class="fw-bold">Membentuk manusia pancasila yang bertaqwa</p>
                                    <p>melalui peningkatan peran masjid dan tempat ibadah sebagai pusat peradaban, dengan sasaran misi yaitu pesantren juara, masjid juara, dan ulama juara.</p>
                                </div>
                            </div>
                            <div class="visi-list font-primary">
                                <span class="fw-semibold">
                                    <p>2</p>
                                </span>
                                <div>
                                    <p class="fw-bold">Melahirkan manusia yang berbudaya, berkualitas, bahagia dan produktif melalui peningkatan pelayanan publik yang inovatif</p>
                                    <p>dengan sasaran misi yaitu kesehatan juara, perempuan juara, olahraga juara, budaya juara, sekolah juara, guru juara, ibu juara, millennial juara, perguruan tinggi juara, dan smk juara.</p>
                                </div>
                            </div>
                            <div class="visi-list font-primary">
                                <span class="fw-semibold">
                                    <p>3</p>
                                </span>
                                <div>
                                    <p class="fw-bold">Mempercepat pertumbuhan dan pemerataan pembangunan berbasis lingkungan dan tata ruang yang berkelanjutan melalui peningkatan konektivitas wilayah dan penataan daerah</p>
                                    <p>dengan sasaran misi yaitu transportasi juara, logistik juara, gerbang desa juara, kota juara, pantura juara, pansela juara, dan energi juara.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 pt-5">
                            <div class="img-port-wrapper">
                                <img src="https://images.unsplash.com/photo-1675349673331-5bd6398000b9?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>
                        </div>
                        <div class="col-md-4 mt-5">
                            <div class="img-port-wrapper">
                                <img src="https://images.unsplash.com/photo-1675349673331-5bd6398000b9?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
                            </div>
                        </div>
                        <div class="col-md-8 mt-5">
                            <div class="visi-list font-primary">
                                <span class="fw-semibold">
                                    <p>4</p>
                                </span>
                                <div>
                                    <p class="fw-bold">Meningkatkan produktivitas dan daya saing ekonomi umat yang sejahtera dan adil melalui pemanfaatan teknologi digital dan kolaborasi dengan pusat-pusat inovasi serta pelaku pembangunan</p>
                                    <p>dengan sasaran misi yaitu nelayan juara, pariwisata juara, lingkungan juara, kelola sampah juara, tanggap bencana juara, ekonomi kreatif juara, buruh juara, industri juara, pasar juara, petani juara, umat juara, umkm juara, dan wirausaha juara.</p>
                                </div>
                            </div>
                            <div class="visi-list font-primary">
                                <span class="fw-semibold">
                                    <p>5</p>
                                </span>
                                <div>
                                    <p class="fw-bold">Mewujudkan tata kelola pemerintahan yang inovatif dan kepemimpinan yang kolaboratif antara pemerintahan pusat, provinsi, dan kabupaten/kota</p>
                                    <p>dengan sasaran misi yaitu birokrasi juara, APBD juara, ASN juara, dan BUMD juara.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row priority g-3" style="background: none;">
                        <div class="col-md-12 pt-5">
                            <p class="font-title text-center">Program Unggulan</p>
                            <p class="font-title text-center">Provinsi Kalimantan Utara 2018-2023</p>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-first-aid-kit-line"></i>
                                <p class="font-primary">Reformasi Sistem Kesehatan</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-rocket-2-fill"></i>
                                <p class="font-primary">Pemulihan dan Pertumbuhan Ekonomi Kerakyatan Berbasis Inovasi</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-seedling-fill"></i>
                                <p class="font-primary">Penguatan Sistem Ketahanan Pangan Berkelanjutan</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-first-aid-kit-line"></i>
                                <p class="font-primary">Reformasi Sistem Kesehatan</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-rocket-2-fill"></i>
                                <p class="font-primary">Pemulihan dan Pertumbuhan Ekonomi Kerakyatan Berbasis Inovasi</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-seedling-fill"></i>
                                <p class="font-primary">Penguatan Sistem Ketahanan Pangan Berkelanjutan</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-first-aid-kit-line"></i>
                                <p class="font-primary">Reformasi Sistem Kesehatan</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-rocket-2-fill"></i>
                                <p class="font-primary">Pemulihan dan Pertumbuhan Ekonomi Kerakyatan Berbasis Inovasi</p>
                            </div>
                        </div>
                        <div class="col-md-4 d-none d-sm-block">
                            <div class="squere-item">
                                <i class="ri-seedling-fill"></i>
                                <p class="font-primary">Penguatan Sistem Ketahanan Pangan Berkelanjutan</p>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- TAB KEDUA -->
                <div class="tab-pane fade" id="pills-lambang" role="tabpanel" aria-labelledby="lambang-tab" tabindex="0">
                    <p class="font-title fs-2 fw-bold text-blue">Lambang</p>
                    <!-- <p class="font-primary py-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum ut perspiciatis ea sequi quod placeat inventore fugiat veritatis aliquid aspernatur pariatur, vel quam accusamus necessitatibus sunt, voluptatem rerum, explicabo rem!</p> -->
                    <div class="img-wide-wrapper">
                        <img src="assets/img/lambang-bg.jpg" alt="">
                    </div>

                    <div class="row mt-5">
                        <div class="col-md-12">
                            <p class="fs-4 font-title text-blue fw-semibold">Makna Lambang Daerah</p>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Gunung</p>
                                    <p>Melambangkan potensi sumber daya alam Provinsi Kalimantan Utara di daratan yang terbentang mulai dari pesisir pantai sampai pergunungan di perbatasan negara, selain itu juga melambangkan kawasan pedalaman yang berada di perbatasan yang perlu diper­ hatikan dan dibangun</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/1.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Pita Kalimantan Utara</p>
                                    <p>Melambangkan Provinsi Kalimantan Utara</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/2.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Bintang</p>
                                    <p>Melambangkan Ketuhanan Yang Maha Esa</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/3.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Gerbang Perbatasan Merah Putih</p>
                                    <p>Melambangkan Provinsi Kalimantan Utara merupakan wilayah yang berada di perbatasan Negara Kesatuan Republik Indonesia</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/4.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Perisai dan Ukiran Khas Budaya Dayak, Bulungan dan Tidung dengan Mandau dan Tombak Bersilang</p>
                                    <p>Melambangkan budaya masyarakat di Kalimantan Utara terdapat suku dan budaya yang seragam yang hidup saling berdampingan rukun, bersatu dan harmoni, penuh semangat pantang mundur untuk membangun dan selalu siap dalam menghadapi tantangan yang datang dari luar maupun dari dalam</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/5.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Padi dan Kapas</p>
                                    <p>Melambangkan padi sebagai sumber pangan yang melambangkan kemakmuran masyarakat Provinsi Kalimantan Utara. Kapas melam­bangkan sandang dan kesejahteraan masyarakat Provinsi Kaliman­tan Utara</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/6.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Laut Bergelombang</p>
                                    <p>Melambangkan potensi sumber daya alam yang ada dilautan yang dimiliki oleh Provinsi Kalimantan Utara, bergelombang melambangkan kehidupan yang dinamis</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/7.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Empat Alur Sungai Berwarna Putih</p>
                                    <p>Bermakna sebagai urat nadi perekonomian dari 5 Kabupaten/Kota yang menghubungkan masyarakat di pedalaman dengan daerah pantai dan perbatasan (Sungai Kayan, Sungai Sesayap, Sungai Sembakung, Sungai Mentarang</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/8.png" alt="" style="filter: drop-shadow(0px 3px 5px #222);">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Tulisan Motto ''Benuanta'' di Atas Pita Kuning</p>
                                    <p>Merupakan Motto/Semboyan dari Provinsi Kalimantan Utara yaitu Kalimantan Utara adalah Wilayah Kita/Daerah Kita yang harus dibangun dan dipertahankan untuk kesejahteraan mas­yarakat</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/9.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Sepasang Burung Enggang</p>
                                    <p>Melambangkan kepemimpinan dan kesetiaan, yaitu setia kepada Tanah Air Indonesia</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/10.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-start-0 border-top-0 border-bottom-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Perahu</p>
                                    <p>Melambangkan sarana transportasi masyarakat, melambangkan ke­ bersamaan dalam mengarungi kehidupan</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/11.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 border border-end-0 border-start-0 border-top-0 border-bottom-0">
                            <div class="lambang">
                                <div class="desc font-primary">
                                    <p class="fw-semibold text-blue">Pita lkatan Padi dan Kapas</p>
                                    <p>Melambangkan sikap gotong royong kebersamaan. Jumlah padi 25 butir, pita 10 ikatan dan kapas 12 Buah melambangkan tanggal, bulan dan tahun lahirnya Provinsi Kalimantan Utara</p>
                                </div>
                                <div>
                                    <img src="assets/img/lambang/12.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row priority g-3 px-2 pb-3">
                        <div class="col-md-12">
                            <p class="font-title fs-4 fw-semibold text-blue">Color Meaning</p>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #fff;"></div>
                                </div>
                                <div class="desc">
                                    <p>Putih</p>
                                    <p>Melambangkan kesucian, keikhlasan, kejujuran</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #52c0e1;"></div>
                                </div>
                                <div class="desc">
                                    <p>Biru</p>
                                    <p>melambangkan keindahan, kesejahteraan, kedamaian, kewibawaan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                           <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #43b061;"></div>
                                </div>
                                <div class="desc">
                                    <p>Hijau</p>
                                    <p>melambangkan kesuburan, kemakmuran, ketaqwaan, pertembuhan</p>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-4 ">
                           <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #030406;"></div>
                                </div>
                                <div class="desc">
                                    <p>Hitam</p>
                                    <p>melambangkan ketegasan, perlindungan, ketokohan</p>
                                </div>
                           </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #e61735;"></div>
                                </div>
                                <div class="desc">
                                    <p>Merah</p>
                                    <p>melambangkan keberanian, kekuatan</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ">
                            <div class="d-flex border border-1 rounded p-3 h-100">
                                <div class="me-3">
                                    <div class="warna" style="background-color: #f7e247;"></div>
                                </div>
                                <div class="desc">
                                    <p>Kuning</p>
                                    <p>melambangkan kemuliaan, keagungan, kesuksesan</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TAB KETIGA // TAB SEJARAH -->
                <div class="tab-pane fade" id="pills-sejarah" role="tabpanel" aria-labelledby="sejarah-tab" tabindex="0">
                    <p class="font-title text-center text-blue fs-3 pb-3 fw-bold">Sejarah Kalimantan Utara</p>
                    <p class="font-primary">Wilayah yang menjadi Provinsi Kalimantan Utara merupakan bekas wilayah Kesultanan Bulungan. Kesultanan Bulungan pernah menguasai wilayah pesisir yang terdiri dari beberapa daerah yaitu Kabupaten Bulungan, Kabupaten Tana Tidung, Kabupaten Malinau, Kabupaten Nunukan, Kota Tarakan dan Tawau (Sabah sekarang) yang di dalamnya terdapat bermacam-macam suku.Kesultanan Bulungan didirikan pada tahun 1731. Raja pertama adalah Wira Amir yang bergelar Amiril Mukminin (1731–1777), dan Raja yang terakhir atau ke-13 adalah Datuk Tiras yang bergelar Sultan Maulana Muhammad Djalalluddin (1931-1958)</p>

                    <div class="row mt-5">
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>1950</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">WILAYAH SWAPRAJA BULUNGAN</p>
                                <p>Kesultanan Bulungan sepakat untuk bergabung dengan Indonesia di bawah kesepakatan Konvensi Malinau yang dihadiri seluruh raja-raja nusantara pada 7 Agustus 1949. Setelah pengakuan kemerdekaan Indonesia dari Kerajaan Belanda, wilayah Bulungan menerima status sebagai Wilayah Swapraja Bulungan atau "wilayah otonom" di Republik Indonesia pada tahun 1950, yaitu Daerah Istimewa setingkat kabupaten pada tahun 1955. Sultan terakhir, Jalaluddin, meninggal pada tahun 1958. . Atas tuduhan makar dan akan bergabung dengan Malaysia yang sampai sekarang tidak terbukti, maka Kesultanan Bulungan dihapuskan secara sepihak pada tahun 1964 dalam peristiwa berdarah, pembakaran dan pembantaiian pada Kesultanan Bulungan yang dikenal sebagai Tragedi Bultiken (Bulungan, Tidung, dan Kenyah) dan wilayah Kesultanan Bulungan hanya menjadi kabupaten yang sederhana di bawah Kalimantan Timur.</p>
                            </div>
                        </div>
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>2000</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">PEMBENTUKAN DAERAH OTONOMI BARU</p>
                                <p>Seiring berjalanya waktu Kabupaten Bulungan dimekarkan menjadi beberapa wilayah otonom baru yaitu Kab. Nunukan, Kab. Malinau, KTT (Kabupaten Tana Tidung) dan Kota Tarakan. Masyarakat Kalimantan Utara merasa tertinggal jauh baik dari segi pembangunan insfrastruktur, pendidikan, dan kemasyarakatan dari daerah lain. Dengan semangat untuk memajukan kualitas hidup masyarakat daerah, mulai timbul wacana pembentukan Provinsi Kalimantan Utara pada tahun 2000. Dengan perjuangan yang panjang Provinsi Kalimantan Utara secara resmi terbentuk sejak ditandatanganinya Undang-Undang Nomor 20 Tahun 2012 tentang Pembentukan Provinsi Kalimantan Utara pada tanggal 16 November 2012 oleh Presiden RI Susilo Bambang Yudhoyono.</p>
                            </div>
                        </div>
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>2013</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">PERESMIAN DAERAH OTONOMI BARU</p>
                                <p>RUU pembentukan Provinsi Kalimantan Utara ini sebelumnya telah disetujui oleh Rapat Paripurna DPR pada 25 Oktober 2012 untuk disahkan menjadi undang-undang (UU). Sejak terbit UU No. 20 Tahun 2012 maka resmi terbentuk Provinsi Kalimantan Utara sebagai provinsi ke 34 di Indonesia. Pada tanggal 22 April 2013 Penjabat Gubernur Kalimantan Utara yaitu Irianto Lambrie dilantik oleh Menteri Dalam Negeri Gamawan Fauzi di Jakarta.Pada saat dibentuknya, wilayah Kaltara terbagi 5 wilayah administrasi yang terdiri atas 1 kota dan 4 kabupaten yakni Kota Tarakan, Kabupaten Bulungan, Kabubaten Malinau, Kabupaten Nunukan, dan Kabupaten Tana Tidung. Seluruh wilayah tersebut sebelumnya merupakan bagian dari wilayah Kalimantan Timur. Berdasarkan bunyi Pasal 7 Undang-Undang Nomor 20 Tahun 2012, Kaltara beribukota Tanjung Selor yang berada di Kabupaten Bulungan.</p>
                            </div>
                        </div>
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>2015</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">PEMILIHAN PIMPINAN DAERAH</p>
                                <p>Kalimantan Utara pertama kali menyelenggarakan pemilihan Gubernur dan Wakil Gubernur pada Desember 2015, yang sebelumnya dijabat oleh PJ Gubernur. Gubernur dan Wakil Gubernur terpilih pertama Kaltara adalah H. Irianto Lambrie dan H. Udin Hianggio.</p>
                            </div>
                        </div>
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>2020</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">PILKADA SERENTAK TAHUN 2020</p>
                                <p>Kalimantan Utara kembali menggelar pemilihan kepala daerah pada tanggal 9 Desember 2021. Selama masa cuti petahana (71 hari), Menteri Dalam Negeri melantik Teguh Setyabudi, sebagai Pejabat Sementara (Pjs.) Gubernur Kalimantan Utara pada tanggal 25 Septermber 2021.</p>
                            </div>
                        </div>
                        <div class="col-md-12 time-line py-5 px-2">
                            <div class="dot">
                                <p>2021</p>
                            </div>
                            <div class="desc font-primary ps-3">
                                <p class="fs-6 fw-bold pb-3">GUBERNUR DAN WAKIL GUBERNUR PERIODE 2021-2024</p>
                                <p>Berdasarkan hasil penetapan yang dikeluarkan oleh Komisi Pemilihan Umum Provinsi Kalimantan Utara pada tanggal 22 Januari 2021 maka Zainal A. Paliwang dan Yansen TP dinyatakan sebagai pasangan Gubernur dan Wakil Gubernur Kaltara terpilih.
                                <br>Kemudian setelah dilantik oleh Presiden Joko Widodo di Istana Negara pada tanggal 15 Februari 2021, maka Zainal A. Paliwang dan Yansen TP resmi menjabat sebagai Gubernur dan Wakil Gubernur Kalimantan Utara periode 2021 - 2024.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- TAB KEEMPAT // TAB PIMPINAN -->
                <div class="tab-pane fade" id="pills-pimpinan" role="tabpanel" aria-labelledby="pimpinan-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold">Pimpinan Kalimantan Utara</p>
                    <p class="mb-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga inventore reprehenderit ad temporibus deleniti dolore officia nobis dignissimos nam! Enim sequi voluptatibus unde possimus? Velit esse fugit quam inventore libero</p>

                    <div class="row leader p-3">
                        <div class="col-md-12 text-center py-4">
                            <p class="font-title fs-5 fw-bold">Struktur Pimpinan Provinsi Kalimantan Utara</p>
                            <p class="font-primary">Periode 2021 - 2024</p>
                        </div>
                        <div class="col-md-6">
                            <div class="profile">
                                <div class="name text-center">
                                    <p class="font-primary fs-6">Gubernur Kalimantan Utara</p>
                                    <p class="font-primary fs-5 fw-semibold">Drs. H. Zainal A. Paliwang, SH., M.Hum</p>
                                </div>
                                <img src="assets/img/leader/gubernur.png" alt="">
                                <div class="mt-5 mb-3">
                                    <a href="#gubernur-kaltara" class="btn-fill font-primary d-block text-center" data-bs-toggle="modal">Lihat Profil</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile">
                                <div class="name text-center">
                                    <p class="font-primary fs-6">Wakil Gubernur Kalimantan Utara</p>
                                    <p class="font-primary fs-5 fw-semibold">Dr. Yansen TP, M.Si</p>
                                </div>
                                <img src="assets/img/leader/wakilgubernur.png" alt="">
                                <div class="mt-5 mb-3">
                                    <a href="#wagub-kaltara" class="btn-fill font-primary d-block text-center" data-bs-toggle="modal">Lihat Profil</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gubernur Modal -->
                    <div class="modal fade" id="gubernur-kaltara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-blue" id="exampleModalLabel">Gubernur Kalimantan Utara (2021-2024)</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-leader">
                                    <div class="row">
                                        <div class="col-md-4 pe-3">
                                            <img src="assets/img/leader/gubernur.png" alt="" class="img-profil">
                                        </div>
                                        <div class="col-md-8 font-primary">
                                            <div class="pb-3">
                                                <p>Nama Lengkap</p>
                                                <p class="fw-semibold">Drs. H. Zainal A. Paliwang, SH., M.Hum</p>
                                            </div>
                                            <div class="pb-3">
                                                <p>Tempat Tanggal Lahir</p>
                                                <p class="fw-semibold">Makassar, 16 Desember 1962</p>
                                            </div>

                                            <p class="fw-semibold">Pendidikan</p>
                                            <ul class="ps-3">
                                                <li>SDS Kecamatan Mandal (1973)</li>
                                                <li>SMPN 1 Kasiguncu (1979)</li>
                                                <li>SMAN 1 Ujung Pandang (1982)</li>
                                                <li>Pendidikan Akabri (1986).</li>
                                                <li>Sekolah Staf dan Pemimpin Tinggi Polri (Sespim) (2001)</li>
                                                <li>S1 Fakultas Hukum Universitas Slamet Rijadi (2004)</li>
                                                <li>S2 Fakultas Hukum Universitas Gadjah Mada (2006)</li>
                                                <li>Pendidikan Kejuruan Diklatpim Tk.I (2015)</li>
                                            </ul>

                                            <p class="fw-semibold">Karir</p>
                                            <ul class="ps-3">
                                                <li>Pamapta Polres Bulelang (1986)</li>
                                                <li>Kasat Polairud Polda Aceh (2000)</li>
                                                <li>Kasat Polairud Polda DIY (2001)</li>
                                                <li>Kasat Polairud Polda Jateng (2002)</li>
                                                <li>Dir Polair Polda Jateng (2003)</li>
                                                <li>Kapolres Blora (2003)</li>
                                                <li>Dir Polair Polda Riau</li>
                                                <li>Kasubditgakkum Ditpolair Baharkam Polri</li>
                                                <li>Dir Polair Polda Riau</li>
                                                <li>Analis Kebijakan Madya Bid. Polair Baharkam Polri.</li>
                                                <li>Wakapolda Kalimantan Utara (2018-2020)</li>
                                                <li>Penyidik Tindak Pidana Utama Tingkat II Bareskrim Polri (2020)</li>
                                                <li>Analis Kebijakan Utama Bidang Pidum Bareskrim Polri (2020)</li>
                                            </ul>

                                            <div>
                                                <p class="fw-semibold">Akun Media Sosial</p>
                                                <p><i class="ri-instagram-line"></i> Instagram</p>
                                                <a href=https://www.instagram.com/zainalapaliwang" target="_blank" class="fw-bold fs-5 text-blue">@zainalapaliwang</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- Wakil Gubernur Modal -->
                    <div class="modal fade" id="wagub-kaltara" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5 text-blue" id="exampleModalLabel">Wakil Gubernur Kalimantan Utara (2021-2024)</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body modal-leader">
                                    <div class="row">
                                        <div class="col-md-4 pe-3">
                                            <img src="assets/img/leader/wakilgubernur.png" alt="" class="img-profil">
                                        </div>
                                        <div class="col-md-8 font-primary">
                                            <div class="pb-3">
                                                <p>Nama Lengkap</p>
                                                <p class="fw-semibold">Dr. Yansen TP, M.Si</p>
                                            </div>
                                            <div class="pb-3">
                                                <p>Tempat Tanggal Lahir</p>
                                                <p class="fw-semibold">Pa' Upan, Krayan Selatan, 14 Januari 1960</p>
                                            </div>

                                            <p class="fw-semibold">Pendidikan</p>
                                            <ul class="ps-3">
                                                <li>SDN Tanjung lapang (1973)</li>
                                                <li>SMPN Tarakan (1977)</li>
                                                <li>SMEAN Tarakan (1981)</li>
                                                <li>APDN Samarinda (1986)</li>
                                                <li>S1 Fisipol Universitas 17 Agustus Samarinda (1991)</li>
                                                <li>S2 Ilmu Administrasi Negara Universitas Brawijaya Malang (2002)</li>
                                                <li>S3 Ilmu Administrasi Negara Universitas Brawijaya Malang (2011)</li>
                                            </ul>

                                            <p class="fw-semibold">Karir</p>
                                            <ul class="ps-3">
                                                <li>Camat Mentarang, Malinau (1993)</li>
                                                <li>Camat Kayan Hilir (1996)</li>
                                                <li>Camat Peso (1999)</li>
                                                <li>Kepala Kantor Capil Bulungan (2001)</li>
                                                <li>Kepala BKD Malinau (2001)</li>
                                                <li>Sekretaris Daerah Malinau (2002-2009)</li>
                                                <li>Staf Ahli Gubernur Bid. Hukum, Politik, Pemerintahan (2009)</li>
                                                <li>Staf Ahli Gubernur Bid. Ekonomi dan Keuangan (2009-2011)</li>
                                                <li>Bupati Malinau (2011-2021)</li>
                                            </ul>

                                            <div>
                                                <p class="fw-semibold">Akun Media Sosial</p>
                                                <p><i class="ri-instagram-line"></i> Instagram</p>
                                                <a href="https://www.instagram.com/yansentp_official" target="_blank" class="fw-bold fs-5 text-blue">@yansentp_official</a>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>

                </div>
                <!-- TAB KELIMA // TAB STRUKTUR PEMERINTAHAN -->
                <div class="tab-pane fade" id="pills-struktur" role="tabpanel" aria-labelledby="struktur-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold">Struktur Pemerintahan Kalimantan Utara</p>
                    <p class="font-primary my-2">Berdasarkan Peraturan Gubernur Jawa Barat No. 82 tahun 2020 tentang Kedudukan dan Susunan Perangkat Daerah Provinsi Jawa Barat, Perangkat Daerah merupakan unsur pembantu Gubernur dan Dewan Perwakilan Rakyat Daerah dalam menyelenggarakan urusan pemerintahan yang menjadi kewenangan Daerah Provinsi Jawa Barat.</p>
                    <div class="struktur-img">
                        <img src="https://jabarprov.go.id/images/about/struktur-perangkat-daerah.png" alt="">
                    </div>

                    <div class="row priority g-3" style="background: none;">
                        <div class="col-md-12 pt-5">
                            <p class="font-title fs-5 fw-semibold">Tugas Pokok dan Fungsi</p>
                        </div>
                        <div class="col-md-6 d-none d-sm-block">
                            <div class="squere-item text-start align-items-start">
                                <p class="font-primary text-blue mb-3 fw-semibold fs-5">Sekretariat Daerah Provinsi</p>
                                <div class="inner-desc p-3">
                                    <p class="border border-top-0 border-start-0 border-end-0 py-2">Sekretariat Daerah Provinsi merupakan unsur staf.</p>
                                    <p class="py-2">Adapun Sekretariat Daerah Provinsi dipimpin oleh Sekretaris Daerah Provinsi yang berkedudukan di bawah dan bertanggungjawab kepada Gubernur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-sm-block">
                            <div class="squere-item text-start align-items-start">
                                <p class="font-primary text-blue mb-3 fw-semibold fs-5">Sekretariat DPRD Provinsi</p>
                                <div class="inner-desc p-3">
                                    <p class="border border-top-0 border-start-0 border-end-0 py-2">Sekretariat DPRD Provinsi merupakan unsur pelayanan administrasi dan pemberian dukungan terhadap tugas dan fungsi DPRD.</p>
                                    <p class="py-2">Adapun Sekretariat Daerah Provinsi dipimpin oleh Sekretaris Daerah Provinsi yang berkedudukan di bawah dan bertanggungjawab kepada Gubernur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-sm-block">
                            <div class="squere-item text-start align-items-start">
                                <p class="font-primary text-blue mb-3 fw-semibold fs-5">Inspektorat Daerah Provinsi</p>
                                <div class="inner-desc p-3">
                                    <p class="border border-top-0 border-start-0 border-end-0 py-2">Inspektorat Daerah Provinsi merupakan unsur pengawas penyelenggaraan Pemerintahan Daerah Provinsi.</p>
                                    <p class="py-2">Inspektorat Daerah Provinsi dipimpin oleh Inspektur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 d-none d-sm-block">
                            <div class="squere-item text-start align-items-start">
                                <p class="font-primary text-blue mb-3 fw-semibold fs-5">Dinas Daerah Provinsi</p>
                                <div class="inner-desc p-3">
                                    <p class="border border-top-0 border-start-0 border-end-0 py-2">Dinas Daerah Provinsi merupakan pelaksana Urusan Pemerintahan yang menjadi kewenangan Daerah Provinsi Jawa Barat.</p>
                                    <p class="py-2">Adapun Dinas Daerah dipimpin oleh Kepala Dinas dengan yang berkedudukan di bawah dan bertangungjawab kepada Gubernur melalui Sekretaris Daerah Provinsi.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- TAB KEENAM // Perangkat Daerah -->
                <div class="tab-pane fade" id="pills-perangkat" role="tabpanel" aria-labelledby="perangkat-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Daftar Perangkat Daerah</p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Badan, Dinas, atau Institusi"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 font-primary d-flex justify-content-between mt-3">
                            <p>Terdapat 46 Perangkat Daerah yang ada di lingkup Pemprov Kalimantan Utara</p>
                            <div class="d-flex list-type">
                                <p class="me-2">Tipe Tampilan</p>
                                <a href="" class="me-2"><i class="ri-list-check"></i></a>
                                <a href=""><i class="ri-layout-grid-fill"></i></a>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- TAB KETUJUH // Perangkat Daerah -->
                <div class="tab-pane fade" id="pills-pemda" role="tabpanel" aria-labelledby="pemda-tab" tabindex="0">
                    <p class="font-title fs-3 text-blue fw-bold pb-3">Daftar Kabupaten Kota</p>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="search-bar font-primary">
                                <form action="">
                                    <i class="ri-search-line"></i>
                                    <input type="search" id="cari" for="cari" placeholder="Cari Kabupatan atau Kota"/>
                                    <button>Cari</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-12 font-primary d-flex justify-content-between mt-3">
                            <p>Terdapat 27 Kabupaten dan Kota yang ada di lingkup Pemprov Kalimantan Utara</p>
                            <div class="d-flex list-type">
                                <p class="me-2">Tipe Tampilan</p>
                                <a href="" class="me-2"><i class="ri-list-check"></i></a>
                                <a href=""><i class="ri-layout-grid-fill"></i></a>
                            </div>
                        </div>

                        <div class="col-md-12 mt-5">
                            <ul class="list-perangkat">
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-item">
                                        <div class="img">
                                            <img src="https://file.jabarprov.go.id/live/media/img/unit-logo/46.%20Logo%20SATPOL%20PP.png" alt="">
                                        </div>
                                        <div class="font-primary">
                                            <p class="fw-bold">Satuan Polisi Pamong Praja Provinsi Jawa Barat.</p>
                                            <p>Drs. Mochamad Ade Afriandi, M.T.</p>
                                            <address class="mt-2">Jl. Banda No. 28, Kota Bandung, Telp. 022- 4235883</address>
                                            <a href="" class="btn-fill fw-semibold d-flex justify-content-between d-sm-inline-block py-2 px-3">Kunjungi website <i class="ri-share-box-line"></i></a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <nav class="pagination">
                                <div class="font-primary d-flex align-items-center">
                                    <p>Tampilkan</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                    </select>
                                    <p>item dari total <strong>46</strong></p>
                                </div>
                                <div class="font-primary d-flex align-items-center justify-content-end">
                                    <p>Halaman</p>
                                    <select class="form-select mx-2">
                                        <option value="5" selected>1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                    <p>dari 10</p>
                                    <a href="" class="border border-top-0 border-bottom-0 px-2 ms-2"><i class="ri-arrow-left-s-line"></i></a>
                                    <a href="" class="px-2"><i class="ri-arrow-right-s-line"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
       </div>
    </section>

@endsection
