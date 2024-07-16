<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Wisata Enrekang</title>
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> --}}

    <meta content="" name="description">
    <meta content="" name="keywords">

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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite([])
</head>

<body>

    <!-- ======= Header ======= -->
    @include('navbar')

    <!-- ======= Hero Section ======= -->
    {{-- <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
        <div class="container text-center text-md-left" data-aos="fade-up">
            <h1>Welcome to <span>Wisata Enrekang</span></h1>
            <h2>Selamat datang di tempat yang penuh petualangan! Kami siap membantu Anda menjelajahi destinasi menarik
                yang tak terlupakan.</h2>

            <a href="#" class="btn-get-started search-button">Cari</a>
            <input type="text" id="search-input" placeholder="Ketik untuk mencari...">
        </div>
    </section><!-- End Hero --> --}}

    <section id="hero">
        <div id="heroCarousel" class="carousel slide">
            <div id="carouselExampleRide" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image: url('img.png'); height: 90vh;">
                        <div class="carousel-caption">
                            <h1>Wisata <span>Enrekang</span></h1>
                            <h2>Selamat datang di tempat yang penuh petualangan! Kami siap membantu Anda menjelajahi
                                destinasi menarik yang tak terlupakan.</h2>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('img.png'); height: 90vh;">
                        <div class="carousel-caption">
                            <h1>Discover <span>Beautiful Landscapes</span></h1>
                            <h2>Jelajahi keindahan alam Enrekang yang menakjubkan dan tak terlupakan.</h2>
                        </div>
                    </div>
                    <div class="carousel-item" style="background-image: url('img.png'); height: 90vh;">
                        <div class="carousel-caption">
                            <h1>Experience <span>Adventure</span></h1>
                            <h2>Nikmati berbagai aktivitas petualangan yang seru dan menantang di Enrekang.</h2>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <main id="main">

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
                                        title="Preview"><i class="fa-regular fa-eye"></i></a>
                                    <a href="wisata/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_wisata }}</h4>
                                    <p>{{ $item->alamat_wisata }}</p>
                                    <table width="100%">
                                        <tr>
                                            <td align="right">
                                                <p>Rp. {{ $item->harga_tiket }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                    {{-- <p>Rp. {{ $item->harga_tiket }}</p> --}}
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
                                        title="Preview"><i class="fa-regular fa-eye"></i></a>
                                    <a href="kuliner/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_kuliner }}</h4>
                                    <p>Rp. {{ $item->harga_kuliner }}</p>

                                    {{-- <p> {{ url('deskripsi_kuliner') }}</p> --}}
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
                                        title="{{ $item->nama_penginapan }}"><i class="fa-regular fa-eye"></i></a>
                                    <a href="penginapan/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_penginapan }}</h4>
                                    <p>Rp. {{ $item->harga_penginapan }}</p>
                                    {{-- <p> {{ url('deskripsi_penginapan') }}</p> --}}
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
                                        title="Preview"><i class="fa-regular fa-eye"></i></a>
                                    <a href="event/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                </figure>

                                <div class="portfolio-info">
                                    <h4>{{ $item->nama_event }}</h4>
                                    <p>{{ $item->alamat_event }}</p>

                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>

                {{-- <div class="text-center mt-3"><button class="btn btn-primary" type="submit">All</button></div> --}}


            </div>

        </section><!-- End Portfolio Section -->

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
                                <p style="text-align: justify;">
                                    Dinas Pemuda, Olahraga, dan Pariwisata Kabupaten Enrekang adalah lembaga pemerintah
                                    daerah
                                    yang bertanggung jawab atas pengembangan dan pengelolaan sektor pemuda, olahraga,
                                    dan
                                    pariwisata di wilayah Kabupaten Enrekang. Tugas utamanya meliputi:
                                </p>
                                <ul style="text-align: justify;">
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

        </section><!-- End Contact Section -->

    </main><!-- End #main -->


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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    {{-- sweetalert --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> --}}
    @include('sweetalert::alert')

    <script src="{{ asset('js/app.css') }}"></script>
</body>

</html>
