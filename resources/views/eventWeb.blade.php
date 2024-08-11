<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <!-- ======= Header ======= -->
    @include('navbar')

    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="event">
                <img src="{{ asset('kuliner.jpg') }}" alt="Example Image">
                <div class="overlay-text">Event</div>
            </div>
            <form action="{{ route('event.urlParamBuilder') }}" method="POST">
                @csrf
                <div class="row justify-content-end mb-5 align-items-center">
                    <div class="col-sm-4 align-content-center">
                        <div class="input-group input-group-sm">
                            <input type="text" class="form-control" placeholder="Search..." name="search">
                            <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <div class="col-auto align-content-center">
                        <div class="btn-group pe-2">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-sort"></i> Sort
                            </button>
                            <ul class="dropdown-menu">
                                <li>
                                    <div class="dropdown-item" href="#">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="radioButtonSort"
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
                                            <input class="form-check-input" type="radio" name="radioButtonSort"
                                                id="flexRadioDefault2" value="desc">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Z - A
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto align-content-center">
                        <div class="btn-group pe-2">
                            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fa-solid fa-filter items-center"></i> Filter
                            </button>
                            <ul class="dropdown-menu">
                                {{-- <li>
                                <h6 class="dropdown-header">Range Harga</h6>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <input type="number" class="form-control" id="harga_minimal" name="harga_minimal"
                                        placeholder="Harga Min" value="">
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item">
                                    <input type="number" class="form-control" id="harga_maksimal" name="harga_maksimal"
                                        placeholder="Harga Max" value="">
                                </div>
                            </li> --}}
                                <li>
                                    <h6 class="dropdown-header">Status Event</h6>
                                </li>
                                <li>
                                    <div class="dropdown-item" href="#">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="belum_mulai"
                                                name="StatusEvent[]" id="statusCheckbox1">
                                            <label class="form-check-label" for="statusCheckbox1">
                                                Belum Mulai
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item" href="#">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="berlangsung"
                                                name="StatusEvent[]" id="statusCheckbox2">
                                            <label class="form-check-label" for="statusCheckbox2">
                                                Berlangsung
                                            </label>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-item" href="#">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="telah_selesai"
                                                name="StatusEvent[]" id="statusCheckbox3">
                                            <label class="form-check-label" for="statusCheckbox3">
                                                Telah Selesai
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i>
                            Search</button>
                    </div>
                </div>
            </form>

            <div class="row portfolio-container">
                @foreach ($data as $item)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="{{ asset('images/' . $item->foto_event) }}" class="img-fluid" alt="">
                                <a href="{{ asset('images/' . $item->foto_event) }}" data-gallery="portfolioGallery"
                                    class="link-preview portfolio-lightbox" title="{{ $item->nama_event }}"><i
                                        class="bx bx-plus"></i></a>
                                <a href="/event/show/{{ $item->id }}" class="link-details"
                                    title="More Details"><i class="bx bx-link"></i></a>
                            </figure>

                            <div class="portfolio-info">
                                <h4>{{ $item->nama_event }}</h4>
                                <p>{{ $item->deskripsi_event }}</p>

                                <!-- Tambahkan tombol status event di sini -->
                                <div class="status-buttons d-flex justify-content-end">
                                    @if (\Carbon\Carbon::now()->lt(\Carbon\Carbon::parse($item->tanggal_pelaksanaan)))
                                        <!-- Jika belum mulai -->
                                        <span class="badge text-bg-warning">Belum Mulai</span>
                                    @elseif(\Carbon\Carbon::now()->gt(\Carbon\Carbon::parse($item->tanggal_selesai)))
                                        <!-- Jika telah selesai -->
                                        <span class="badge text-bg-secondary">Telah Selesai</span>
                                    @else
                                        <!-- Jika sedang berlangsung -->
                                        <span class="badge text-bg-success">Berlangsung</span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="pagination justify-content-center ">
                {{ $data->links() }}
            </div>
    </section>

    <script src="{{ url('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ url('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ url('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    @include('footer')

</body>

</html>
