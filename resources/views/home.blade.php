<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wisata Enrekang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ url('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ url('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
    @vite([])

    <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    @include('navbar')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Welcome to <span>Wisata Enrekang</span></h1>
            <h2>Selamat datang di tempat yang penuh petualangan! Kami siap membantu Anda menjelajahi destinasi menarik
                yang tak terlupakan.</h2>
            <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= What We Do Section ======= -->
        {{-- <section id="what-we-do" class="what-we-do">
            <div class="container">

                <div class="section-title">
                    <h2>What We Do</h2>
                    <p>Magnam dolores commodi suscipit consequatur ex aliquid</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Magni Dolores</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End What We Do Section --> --}}

        <!-- ======= About Section ======= -->
        <section id="about" class="about ">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                    {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p> --}}
                </div>

                <div class="row">
                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ url('assets/img/dispopar.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6 pt-4 pt-lg-0">
                                {{-- <h3>About Us </h3> --}}
                                <p>
                                    Dinas Pemuda, Olahraga, dan Pariwisata Kabupaten Enrekang adalah lembaga pemerintah
                                    daerah
                                    yang bertanggung jawab atas pengembangan dan pengelolaan sektor pemuda, olahraga,
                                    dan
                                    pariwisata di wilayah Kabupaten Enrekang. Tugas utamanya meliputi:
                                </p>
                                <ul>
                                    <li></i> <span> Pemuda: </span> Mengembangkan potensi generasi muda
                                        dalam
                                        berbagai bidang, seperti pendidikan, kewirausahaan, kegiatan sosial, dan
                                        lain-lain. Ini
                                        dapat dilakukan melalui program-program pelatihan, bimbingan, serta penyediaan
                                        fasilitas
                                        dan infrastruktur yang mendukung aktivitas pemuda.</li>
                                    <li></i><span>Olahraga: </span> Bertanggung jawab atas pengelolaan
                                        dan
                                        pengembangan kegiatan olahraga di Kabupaten Enrekang. Ini bisa mencakup
                                        pembinaan atlet,
                                        pengelolaan sarana olahraga, penyelenggaraan kompetisi, dan promosi gaya hidup
                                        sehat
                                        melalui olahraga.</li>
                                    <li></i><span>Pariwisata: </span> Mengelola dan mengembangkan
                                        potensi pariwisata Kabupaten Enrekang. Ini termasuk promosi objek wisata lokal,
                                        pengembangan infrastruktur pariwisata, pelatihan untuk pelaku pariwisata, dan
                                        penciptaan kegiatan yang meningkatkan kunjungan wisatawan.</li>
                                </ul>
                            </div>
                        </div>

                    </div>
        </section><!-- End About Section -->

        <!-- ======= Skills Section ======= -->
        {{-- <section id="skills" class="skills">
            <div class="container">

                <div class="row skills-content">

                    {{-- <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">HTML <i class="val">100%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">CSS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">JavaScript <i class="val">75%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div> --}}

        {{-- <div class="col-lg-6">

                        <div class="progress">
                            <span class="skill">PHP <i class="val">80%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">WordPress/CMS <i class="val">90%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                        <div class="progress">
                            <span class="skill">Photoshop <i class="val">55%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0"
                                    aria-valuemax="100"></div>
                            </div>
                        </div>

                    </div> --}}

        {{-- </div>

        </div>
        </section><!-- End Skills Section -->  --}}

        <!-- ======= Counts Section ======= -->
        {{-- <section id="counts" class="counts">
            <div class="container"> --}}

        {{-- <div class="row">

                    <div class="col-lg-3 col-6">
                        <div class="count-box">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Happy Clients</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6">
                        <div class="count-box">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-6 mt-5 mt-lg-0">
                        <div class="count-box">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p>Hard Workers</p>
                        </div>
                    </div>

                </div> --}}

        {{-- </div>
        </section><!-- End Counts Section --> --}}

        <!-- ======= Services Section ======= -->
        {{-- <section id="services" class="services section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="icon-box">
                            <i class="bi bi-briefcase"></i>
                            <h4><a href="#">Lorem Ipsum</a></h4>
                            <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint
                                occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4 mt-lg-0">
                        <div class="icon-box">
                            <i class="bi bi-card-checklist"></i>
                            <h4><a href="#">Dolor Sitema</a></h4>
                            <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-bar-chart"></i>
                            <h4><a href="#">Sed ut perspiciatis</a></h4>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
                                nulla pariatur</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-binoculars"></i>
                            <h4><a href="#">Nemo Enim</a></h4>
                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                                anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-brightness-high"></i>
                            <h4><a href="#">Magni Dolore</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                                voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-md-6 mt-4">
                        <div class="icon-box">
                            <i class="bi bi-calendar4-week"></i>
                            <h4><a href="#">Eiusmod Tempor</a></h4>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta
                                nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section --> --}}

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Destinasi</h2>
                    <p>Telusuri destinasi menarik kami dan buat kenangan tak terlupakan di setiap langkahmu.
                    </p>
                </div>

                <div class="row align-items-center justify-content-center mb-5">
                    <div class="col-auto">
                        {{-- <ul id="portfolio-flters">
                            {{-- <li data-filter="*" class="filter-active">All</li> --}}
                        {{-- <li data-filter=".filter-wisata">Wisata</li>
                            <li data-filter=".filter-kuliner">Kuliner</li>
                            <li data-filter=".filter-penginapan">Kebudayaan</li>
                            <li data-filter=".filter-event">Event</Ei> --}}
                        {{-- <li><a href="{{ route('wisata.tampil') }}">Wisata</a></li>
                            <li><a href="">Kuliner</a></li>
                            <li><a href="">Kebudayaan</a></li>
                            <li><a href="">Event</a></li>
                        </ul> --}}
                        <a href="{{ route('wisata.tampil') }}" class="btn btn-primary" role="button">Wisata</a>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('kuliner.tampil') }}" class="btn btn-primary" role="button">Kuliner</a>
                    </div>
                    <div class="col-auto">
                        <a href="#portfolio" class="btn btn-primary" role="button">Kebudayaan</a>
                    </div>
                    <div class="col-auto">
                        <a href="{{ route('event') }}" class="btn btn-primary" role="button">Event</a>
                    </div>
                </div>

                {{-- <div class="row align-items-center align-content-center mb-5">
                    <div class="col-auto">
                        <form class="d-inline-flex" action="{{ route('home.urlParamBuilder') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <i class="fa-solid fa-filter items-center"></i>
                            <p class="ps-3 pe-4">Filter | Kategori:</p>
                            @foreach ($kategori as $kategori)
                                <div class="form-check pe-3">
                                    <input class="form-check-input" type="checkbox"
                                        value={{ $kategori->nama_kategori }} name="kategori[]" id={{ $kategori->id }}>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        {{ $kategori->nama_kategori }}
                                    </label>
                                </div>
                            @endforeach
                            <p class="ps-3 pe-4">| Harga Tiket:</p>
                            <div class="d-flex pe-3">
                                <input type="number" class="form-control" id="harga_minimal" name="harga_minimal"
                                    placeholder="Harga Minimum" value="">
                                <p class="ps-4 pe-4">—</p>
                                <input type="number" class="form-control" id="harga_maksimal" name="harga_maksimal"
                                    placeholder="Harga Maksimal" value="">
                            </div>
                            <p class="ps-3 pe-4">|</p>
                            <div class="btn-group pe-2">
                                <button type="button" class="btn btn-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa-solid fa-sort"></i> Sort
                                </button>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioButtonAZ"
                                                    id="flexRadioDefault1" value="asc">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    A - Z
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="radioButtonAZ"
                                                    id="flexRadioDefault2" value="desc">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Z - A
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <div class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="radioButtonHarga" id="flexRadioDefault2-1" value="desc">
                                                <label class="form-check-label" for="flexRadioDefault1">
                                                    Harga Tertinggi - Terendah
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-item" href="#">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="radioButtonHarga" id="flexRadioDefault2-2" value="asc">
                                                <label class="form-check-label" for="flexRadioDefault2">
                                                    Harga Terendah - Tertinggi
                                                </label>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <button type="submit" class="btn btn-primary"><i
                                    class="fa-solid fa-filter items-center"></i> Filter</button>
                        </form>
                    </div>
                </div> --}}

                <div class="row portfolio-container">
                    @foreach ($wisata as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-wisata wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    {{-- {{ $item->foto_wisata }} --}}


                                    <img src="{{ asset('images/' . $item->foto_wisata) }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                        title="Preview"><i class="bx bx-plus"></i></a>
                                    <a href="wisata/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_wisata }}</h4>
                                    {{-- <p> {{ url('deskripsi_wisata') }}</p> --}}
                                    <p>{{ $item->deskripsi_wisata }}</p>
                                    <p>Rp. {{ $item->harga_tiket }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($kuliner as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-kuliner wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    {{-- {{ $item->foto_kuliner }} --}}


                                    <img src="{{ asset('images/' . $item->foto_kuliner) }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                        title="Preview"><i class="bx bx-plus"></i></a>
                                    <a href="kuliner/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_kuliner }}</h4>

                                    {{-- <p> {{ url('deskripsi_kuliner') }}</p> --}}
                                    {{-- <p>{{ $item->deskripsi_kuliner }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($data as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-penginapan wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    {{-- {{ $item->foto_penginapan }} --}}


                                    <img src="{{ asset('images/' . $item->foto_penginapan) }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ asset('images/' . $item->foto_penginapan) }}"
                                        data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                        title="{{ $item->nama_penginapan }}"><i class="bx bx-plus"></i></a>
                                    <a href="penginapan/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_penginapan }}</h4>
                                    {{-- <p> {{ url('deskripsi_penginapan') }}</p> --}}
                                    {{-- <p>{{ $item->deskripsi_penginapan }}</p> --}}
                                </div>
                            </div>
                        </div>
                    @endforeach

                    @foreach ($event as $item)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-event wow fadeInUp">
                            <div class="portfolio-wrap">
                                <figure>
                                    <img src="{{ asset('images/' . $item->foto_event) }}" class="img-fluid"
                                        alt="">
                                    <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}"
                                        data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                        title="Preview"><i class="bx bx-plus"></i></a>
                                    <a href="event/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_event }}</h4>
                                    {{-- <p>{{ $item->deskripsi_event }}</p> --}}

                                </div>
                            </div>
                        </div>
                    @endforeach



                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-7.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 1</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div> --}}

                    {{-- <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-3.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 2</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-4.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 2</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-5.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 2</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-6.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">App 3</a></h4>
                                <p>App</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card wow fadeInUp" data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-8.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Card 3</a></h4>
                                <p>Card</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web wow fadeInUp" data-wow-delay="0.2s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ url('assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                    alt="">
                                <a href="{{ url('assets/img/portfolio/portfolio-9.jpg') }}"
                                    class="link-preview portfolio-lightbox" data-gallery="portfolioGallery"
                                    title="Preview"><i class="bx bx-plus"></i></a>
                                <a href="portfolio-details.html" class="link-details" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="portfolio-details.html">Web 1</a></h4>
                                <p>Web</p>
                            </div>
                        </div>
                    </div> --}}

                </div>

                {{-- <div class="text-center mt-3"><button class="btn btn-primary" type="submit">All</button></div> --}}


            </div>
            <div class="text-center mt-3"><button class="btn btn-primary" type="submit">All</button>
            </div>
        </section><!-- End Portfolio Section -->

        {{-- <section id="portfolio" class="portfolio">
            <div class="container">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <ul id="portfolio-flters">
                            <li data-filter="*" class="filter-active">All</li>
                            <li data-filter=".filter-app">Wisata</li>
                            <li data-filter=".filter-card">Card</li>
                            <li data-filter=".filter-web">Web</li>
                        </ul>
                    </div>
                </div>

                {{-- @foreach ($collection as $item) --}}
        {{-- <div class="row portfolio-container">
            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                <div class="portfolio-wrap">
                    <figure>
                        <img src="{{ url('assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                            class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                        <a href="details" class="link-details" title="More Details"><i class="bx bx-link"></i></a>
                    </figure>

                    <div class="portfolio-info">
                        <h4><a href="portfolio-details.html">App 1</a></h4>
                        <p>App</p>
                    </div>
                </div>
            </div>
        </div>
        </section>  --}}

        <!-- ======= Testimonials Section ======= -->
        {{-- <section id="testimonials" class="testimonials section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Testimonials</h2>
                    <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
                </div>

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit
                                    rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam,
                                    risus at semper.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('assets/img/testimonials/testimonials-1.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid
                                    cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                    legam anim culpa.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('assets/img/testimonials/testimonials-2.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem
                                    veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint
                                    minim.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('assets/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                    fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem
                                    dolore labore illum veniam.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('assets/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster
                                    veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam
                                    culpa fore nisi cillum quid.
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                                <img src="{{ url('assets/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section --> --}}

        <!-- ======= Team Section ======= -->
        {{-- <section id="team" class="team">
            <div class="container">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Sit sint consectetur velit quos quisquam cupiditate nemo qui</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ url('assets/img/team/team-1.jpg') }}" alt="">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>
                                Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis
                                quaerat qui aut aut aut
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ url('assets/img/team/team-2.jpg') }}" alt="">
                            <h4>Sarah Jhinson</h4>
                            <span>Product Manager</span>
                            <p>
                                Repellat fugiat adipisci nemo illum nesciunt voluptas repellendus. In architecto rerum
                                rerum temporibus
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="member">
                            <img src="{{ url('assets/img/team/team-3.jpg') }}" alt="">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>
                                Voluptas necessitatibus occaecati quia. Earum totam consequuntur qui porro et laborum
                                toro des clara
                            </p>
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section --> --}}

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Kontak</h2>
                    <p>Jelajahi dunia dengan kami dan beri tahu kami tentang pengalaman Anda! Kontak kami untuk saran,
                    </p>
                    <p> pertanyaan, atau sekadar berbagi cerita petualangan.</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat</h3>
                            <p>Jl. Jenderal Sudirman No. 3 Pinang Enrekang</p>
                            <p> Kabupaten Enrekang, Sulawesi Selatan 91711</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email </h3>
                            <p>kominfo@enrekangkab.go.id</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Telepon</h3>
                            <p>0420-21056 / 0420-21002</p>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6 ">
                        <iframe class="mb-4 mb-lg-0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.104325221181!2d119.77340251025275!3d-3.5634506423397103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9440637ac94061%3A0x71324d8dabb03f30!2sDinas%20Pemuda%2C%20Olah%20raga%20dan%20Pariwisata%20Kabupaten%20Enrekang!5e0!3m2!1sid!2sid!4v1713149644702!5m2!1sid!2sid"
                            frameborder="0" style="border:0; width: 100%; height: 300px;" allowfullscreen></iframe>
                    </div>

                    <div class="col-lg-6">
                        <form action="{{ route('simpan') }}" method="post" role="form" class="">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Nama" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="number" class="form-control" name="telepon" id="telepon"
                                    placeholder="No Telepon" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Saran" required></textarea>
                            </div>
                            <div class="text-left mt-3"><button class="btn btn-primary" type="submit"
                                    {{ Auth::check() ? '' : 'disabled' }}>{{ Auth::check() ? 'Kirim Saran' : 'Login untuk Kirim Saran' }}</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>

            {{-- <div class="row mt-5 justify-content-center">

                    <div class="col-lg-10">

                        <div class="info-wrap">
                            <div class="row">
                                <div class="col-lg-4 info">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>A108 Adam Street<br>New York, NY 535022</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>info@example.com<br>contact@example.com</p>
                                </div>

                                <div class="col-lg-4 info mt-4 mt-lg-0">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="row mt-5 justify-content-center">
                    <div class="col-lg-10">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div> --}}
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    {{-- <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Lumia</h3>
                        <p>
                            A108 Adam Street <br>
                            New York, NY 535022<br>
                            United States <br><br>
                            <strong>Phone:</strong> +1 5589 55488 55<br>
                            <strong>Email:</strong> info@example.com<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Join Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>Lumia</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/lumia-bootstrap-business-template/ -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer --> --}}

    @include('footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    {{-- sweetalert --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    @include('sweetalert::alert')
</body>

</html>
