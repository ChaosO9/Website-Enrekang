<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio Details - Lumia Bootstrap Template</title>
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
    @vite(['resources/css/app.css'])

    <!-- =======================================================
  * Template Name: Lumia
  * Template URL: https://bootstrapmade.com/lumia-bootstrap-business-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('navbar')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Portfoio Details</h2>
                    <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Detail Penginapan</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">
                                {{-- @foreach ($data as $item) --}}
                                {{-- <div class="swiper-slide"> --}}
                                <img src="{{ asset('images/penginapan/' . $penginapan->foto_penginapan) }}"
                                    alt="">
                            </div>
                            {{-- <img src="{{ asset('images/' . $item->foto_penginapan) }}" --}}
                            {{--
                                <div class="swiper-slide">
                                    <img src="{{ url('assets/img/portfolio/portfolio-2.jpg') }}" alt="">
                                </div>

                                <div class="swiper-slide">
                                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                                </div> --}}
                            {{-- @endforeach --}}

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            {{-- @foreach ($data as $item) --}}
                            <h3>{{ $penginapan->nama_penginapan }}</h3>

                            <ul>
                                <li>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation" style="margin-top: 10px">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home-tab-pane" type="button" role="tab"
                                                aria-controls="home-tab-pane" aria-selected="true">Detail</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link {{ Auth::check() ? '' : 'disabled' }}"
                                                id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                                                type="button" role="tab" aria-controls="profile-tab-pane"
                                                aria-selected="false">Beri
                                                Ulasan</button>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel"
                                    aria-labelledby="home-tab" tabindex="0">
                                    <ul>
                                        <li>
                                            <div class="flex items-center mb-3 mt-3">
                                                @for ($i = 0; $i < $rating_rata2; $i++)
                                                    <svg class="w-6 h-6 ms-2 text-yellow-300" aria-hidden="true"
                                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                        viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                @endfor
                                                @for ($i = $rating_rata2; $i < 5; $i++)
                                                    <svg class="w-6 h-6 ms-2 text-gray-300 dark:text-gray-500"
                                                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                        fill="currentColor" viewBox="0 0 22 20">
                                                        <path
                                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                    </svg>
                                                @endfor
                                                <p class="ms-4 m-0 text-sm font-semibold text-gray-900 dark:text-white">
                                                    {{ $rating_rata2 }} dari {{ $semua_reviews->count() }} Ulasan</p>
                                            </div>
                                        </li>
                                        <li><strong>Harga</strong>: {{ $penginapan->harga_penginapan }}</li>
                                        <li><strong>Lokasi</strong>: {{ $penginapan->alamat_penginapan }}</a></li>
                                        <li><strong>Deskripsi</strong>: <br>
                                            {{ $penginapan->deskripsi_penginapan }}</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel"
                                aria-labelledby="profile-tab" tabindex="0">
                                <ul>
                                    <li>
                                        <div class="container-2">
                                            <div class="post">
                                                <div class="text">Terima kasih sudah menilai!</div>
                                                <div class="edit">EDIT</div>
                                            </div>
                                            <div class="star-widget">
                                                <input type="radio" name="rateBintang" value="5"
                                                    id="rate-5">
                                                <label for="rate-5" class="fas fa-star"></label>
                                                <input type="radio" name="rateBintang" value="4"
                                                    id="rate-4">
                                                <label for="rate-4" class="fas fa-star"></label>
                                                <input type="radio" name="rateBintang" value="3"
                                                    id="rate-3">
                                                <label for="rate-3" class="fas fa-star"></label>
                                                <input type="radio" name="rateBintang" value="2"
                                                    id="rate-2">
                                                <label for="rate-2" class="fas fa-star"></label>
                                                <input type="radio" name="rateBintang" value="1"
                                                    id="rate-1">
                                                <label for="rate-1" class="fas fa-star"></label>
                                                <form
                                                    action="{{ route('penginapan.tambah.review', ['id' => $penginapan->id]) }}"
                                                    method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <p></p>
                                                    <input type="text" name="hiddenRate" id="hiddenText"
                                                        style="display:none;">
                                                    <div class="textarea">
                                                        <textarea name="komentar" cols="30" placeholder="Ceritakan pengalaman Anda (Opsional)..."></textarea>
                                                    </div>
                                                    {{-- <div class="btn-2">
                                                            <button type="submit">Kirim!</button>
                                                        </div> --}}
                                            </div>
                                            <div class="textarea mt-3 invisible">
                                                <label for="formFileSm" class="form-label">Masukkan gambar
                                                    (Opsional)</label>
                                                <input class="form-control form-control-sm" id="formFileSm"
                                                    type="file" name="gambar_review">
                                            </div>
                                            <div class="btn-2 invisible">
                                                <button type="submit">Kirim!</button>
                                            </div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Portfolio Details Section -->

        <section id="portfolio" class="portfolio mb-4">
            <div class="container">
                <div class="section-title ">
                    <h2>Fasilitas {{ $penginapan->nama_penginapan }}</h2>
                    {{-- <img src="{{ asset('kuliner.jpg') }}" alt="Example Image"> --}}
                    {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p> --}}
                </div>
                <div class="row portfolio-container">
                    @foreach ($fasilitas as $fasilitas)
                        @if (array_key_exists($fasilitas, $ikon_fasilitas))
                            <div class="col-lg-3">
                                <p>{!! $ikon_fasilitas[$fasilitas] !!} {{ $fasilitas }}</p>
                            </div>
                        @else
                            <div class="col-lg-3">
                                <p><i class="fa-solid fa-square-ellipsis"></i> {{ $fasilitas }}</p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>

        <section id="portfolio" class="portfolio">
            <div class="container">
                {{-- <div class="section-title ">
                    <h2>Galeri Penginapan {{ $penginapan->nama_penginapan }}</h2>
                    <img src="{{ asset('kuliner.jpg') }}" alt="Example Image">
                    <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
                </div>

                <div class="row portfolio-container">
                    @if (isset($galeri) && !$galeri->isEmpty())
                        @foreach ($galeri as $item)
                            <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                                <div class="portfolio-wrap">
                                    <figure>
                                        <img src="{{ asset('images/' . $item->gambar) }}" class="img-fluid"
                                            alt="">
                                        <a href="{{ asset('images/' . $item->gambar) }}"
                                            data-gallery="portfolioGallery" class="link-preview portfolio-lightbox"
                                            title="{{ $item->nama_wisata }}"><i class="bx bx-plus"></i></a>
                                        <a href="/wisata/show/{{ $item->id }}" class="link-details"
                                        title="More Details"><i class="bx bx-link"></i></a>
                                    </figure>

                                    <div class="portfolio-info">
                                        <h4>{{ $item->deskripsi }}</h4>
                                        <p>{{ $item->deskripsi_wisata }}</p>
                                    <p>Rp. {{ $item->harga_tiket }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col-lg-6 col-md-6 mx-auto align-items-center justify-content-center">
                            <h4>Tidak Ada Gambar Untuk Ditampilkan</h4>
                        </div>
                    @endif
                </div>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-image"></i><i class="fa-solid fa-plus"></i>Tambah Gambar
                </button> --}}
                {{-- <div class="col-lg-6 mt-5">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.104325221181!2d119.77340251025275!3d-3.5634506423397103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d9440637ac94061%3A0x71324d8dabb03f30!2sDinas%20Pemuda%2C%20Olah%20raga%20dan%20Pariwisata%20Kabupaten%20Enrekang!5e0!3m2!1sid!2sid!4v1713149644702!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 140%; height: 400px; " allowfullscreen></iframe>
                    <div class="col-lg-6 mt-5">
                        <iframe class="mb-4 mb-lg-0"
                            src="{{ 'https://www.google.com/maps/embed/v1/place?key=AIzaSyCtQdCKUA91HOI2QRMhKMNrZAxOQcOXWXM&q=' . $penginapan->maps }}"
                            frameborder="0" style="border:0; width: 140%; height: 400px; " allowfullscreen></iframe>
                    </div>
                </div> --}}

                <div class="section-title">
                    <h2>Lokasi</h2>
                </div>
                <div class="col-lg-6">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCtQdCKUA91HOI2QRMhKMNrZAxOQcOXWXM&q={{ $penginapan->latitude }},{{ $penginapan->longitude }}"
                        frameborder="0" style="border:0; width: 200%; height: 350px;" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambahkan Gambar</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form
                            action="{{ route('penginapan.tambah.gambar', ['id' => $penginapan->id, 'from' => 'detail_penginapan']) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                Tambah Gambar untuk Galeri Kuliner "{{ $penginapan->nama_penginapan }}"
                                            </h6>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="mb-3">
                                                    <label for="formFile" class="form-label">File Gambar</label>
                                                    <input class="form-control" type="file" id="imageFile"
                                                        name="foto">
                                                </div>
                                                <div class="col form-group">
                                                    <label for="nama_penginapan">Deskripsi</label>
                                                    <input type="text" class="form-control" id="deskripsi_gambar"
                                                        name="deskripsi_gambar">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Unggah</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-primary">Unggah</button>
                    </div> --}}
                </div>
            </div>
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

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
    </footer><!-- End Footer -->

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

</body>

</html>
