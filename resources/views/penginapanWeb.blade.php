<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css">


<link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="penginapan">
            <h2>Penginapan</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
        </div>

        <form action="{{ route('penginapan.urlParamBuilder') }}" method="POST">
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
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioButtonSort"
                                            id="flexRadioDefault2-1" value="harga_desc">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Harga Tertinggi - Terendah
                                        </label>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="dropdown-item" href="#">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="radioButtonSort"
                                            id="flexRadioDefault2-2" value="harga_asc">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Harga Terendah - Tertinggi
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
                            <li>
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


                            <img src="{{ asset('images/' . $item->foto_penginapan) }}" class="img-fluid"
                                alt="">
                            <a href="{{ asset('images/' . $item->foto_penginapan) }}" data-gallery="portfolioGallery"
                                class="link-preview portfolio-lightbox" title="{{ $item->nama_penginapan }}"><i
                                    class="bx bx-plus"></i></a>
                            <a href="penginapan/show/{{ $item->id }}" class="link-details"
                                title="More Details"><i class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4>{{ $item->nama_penginapan }}</h4>
                            <p>{{ $item->deskripsi_penginapan }}</p>
                            <p>Rp. {{ $item->harga_penginapan }}</p>
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
