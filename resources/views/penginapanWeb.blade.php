<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="penginapan">
            <h2>Penginapan</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
        </div>

        <div class="row justify-content-end mb-3">
            <div class="col-md-4">
                <form action="{{ route('tampil') }}" method="GET">
                    <div class="input-group input-group-sm mb-3">
                        <input type="text" class="form-control" placeholder="Search..." name="search">
                        <button class="btn btn-success" type="submit"><i class="bi bi-search"></i></button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row portfolio-container">
            @foreach ($data as $item)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>


                            <img src="{{ asset('images/' . $item->foto_penginapan) }}" class="img-fluid" alt="">
                            <a href="{{ asset('images/' . $item->foto_penginapan) }}" data-gallery="portfolioGallery"
                                class="link-preview portfolio-lightbox" title="{{ $item->nama_penginapan }}"><i
                                    class="bx bx-plus"></i></a>
                            <a href="penginapan/show/{{ $item->id }}" class="link-details" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4>{{ $item->nama_penginapan }}</h4>
                            <p>{{ $item->deskripsi_penginapan }}</p>
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
