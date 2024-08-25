<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Details event</title>
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
                    <h2>Event</h2>
                    {{-- <ol>
                        <li><a href="index.html">Home</a></li>
                        <li>Portfoio Details</li>
                    </ol> --}}
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
                                <img src="{{ asset('images/event/' . $event->foto_event) }}" alt="">
                            </div>
                            {{-- <img src="{{ asset('images/' . $item->foto_event) }}" --}}
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
                            <h3>{{ $event->nama_event }}</h3>

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
                                            <div class="flex items-center  mb-3">
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
                                        {{-- <li><strong>Nama event</strong>: {{$event->nama_event }}
                                                </li> --}}
                                        {{-- <li><strong>Harga</strong>: {{ $event->harga_tiket }}</li> --}}
                                        <li><strong>Lokasi</strong>: {{ $event->tempat_event }}</a></li>
                                        <li><strong>Deskripsi</strong>: <br> {{ $event->deskripsi_event }}</a></li>
                                    </ul>
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
                                                        action="{{ route('event.tambah.review', ['id' => $event->id]) }}"
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

            </div>
        </section><!-- End Portfolio Details Section -->

        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title ">
                    <h2>Review Event {{ $event->nama_event }}</h2>
                    {{-- <img src="{{ asset('kuliner.jpg') }}" alt="Example Image"> --}}
                    {{-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p> --}}
                </div>

                <section class="bg-white dark:bg-gray-900 py-2 lg:py-4">
                    <div class="max-w-3xl mx-auto px-4">
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Ulasan
                                ({{ $reviews->count() }})</h2>
                        </div>
                        @foreach ($reviews as $ulasan)
                            <article class="mb-10">
                                <div class="flex items-center mb-4">
                                    <img class="w-10 h-10 me-4 rounded-full"
                                        src="https://gravatar.com/avatar/83f6c134ed8c2503aed7355d1bdb8bd1?s=80&d=mp"
                                        alt="">
                                    <div class="font-medium dark:text-white conten">
                                        <p class="m-0 p-0">{{ $ulasan->username }} </p>
                                        <time datetime="2014-08-16 19:00"
                                            class="block text-sm text-gray-500 dark:text-gray-400">Bergabung pada
                                            {{ \Carbon\Carbon::parse($ulasan->user_created_at)->format('d F Y') }}</time>
                                    </div>
                                </div>
                                <div class="flex items-center mb-1 space-x-1 rtl:space-x-reverse">
                                    @for ($i = 0; $i < $ulasan->rating_bintang; $i++)
                                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @endfor
                                    @for ($i = $ulasan->rating_bintang; $i < 5; $i++)
                                        <svg class="w-4 h-4 text-gray-300 dark:text-gray-500" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                            viewBox="0 0 22 20">
                                            <path
                                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    @endfor
                                    {{-- <h3 class="ms-2 text-sm font-semibold text-gray-900 dark:text-white">Thinking to buy another one!</h3> --}}
                                </div>
                                <footer class="mb-1 text-sm text-gray-500 dark:text-gray-400">
                                    <p>Diulas pada <time datetime="2017-03-03 19:00">
                                            {{ \Carbon\Carbon::parse($ulasan->created_at)->format('d F Y, H:i') }}</time>
                                    </p>
                                </footer>
                                <p class="mb-2 text-gray-500 dark:text-gray-400">{{ $ulasan->komentar }}</p>
                                @if (isset($ulasan->gambar))
                                    <img src="{{ asset('images/event/' . $ulasan->gambar) }}" alt="Description"
                                        class="max-w-56 object-cover rounded-lg shadow-md border border-gray-200">
                                @endif
                                <livewire:comments :model="$ulasan" :ulasan="$ulasan" />
                            </article>
                        @endforeach
                    </div>
                    {{-- <div class="col-lg-6 mt-5">
                        <iframe class="mb-4 mb-lg-0"
                            src="{{ 'https://www.google.com/maps/embed/v1/place?key=AIzaSyCtQdCKUA91HOI2QRMhKMNrZAxOQcOXWXM&q=' . $event->maps }}"
                            frameborder="0" style="border:0; width: 140%; height: 400px; " allowfullscreen></iframe>
                    </div> --}}
                </section>
                <div class="section-title">
                    <h2>Lokasi</h2>
                </div>
                <div class="col-lg-6">
                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCtQdCKUA91HOI2QRMhKMNrZAxOQcOXWXM&q={{ $event->latitude }},{{ $event->longitude }}"
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
                            action="{{ route('event.tambah.gambar', ['id' => $event->id, 'from' => 'detail_event']) }}"
                            method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-3">
                                            <h6 class="m-0 font-weight-bold text-primary">
                                                Tambah Gambar untuk Galeri Event "{{ $event->nama_event }}"</h6>
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
    @include('footer')

    @include('sweetalert::alert')

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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <script>
        document.querySelectorAll('input[name="rateBintang"]').forEach(function(radio) {
            radio.addEventListener('change', function() {
                document.getElementById('hiddenText').value = this.value;
                document.querySelector('.btn-2').classList.remove('invisible');
                document.querySelectorAll('.textarea.invisible').forEach(function(el) {
                    el.classList.remove('invisible');
                });
            });
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            if (window.location.hash === '#review-tab') {
                const reviewTabButton = document.querySelector('#review-tab');
                reviewTabButton.click();
            }
        });
    </script>
</body>

</html>
