<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<link href="{{ url('assets/css/style.css') }}" rel="stylesheet">
<section id="portfolio" class="portfolio">
    <div class="container">

        <div class="section-title">
            <h2>Kuliner</h2>
            <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit</p>
        </div>

        <div class="row justify-content-end mb-3">
            <div class="col-md-4">
                <form action="{{ route('kuliner.tampil') }}" method="GET">
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
                            <img src="{{ asset('images/' . $item->foto_kuliner) }}" class="img-fluid" alt="">
                            <a href="{{ url('assets/img/portfolio/portfolio-1.jpg') }}" data-gallery="portfolioGallery"
                                class="link-preview portfolio-lightbox" title="Preview"><i class="bx bx-plus"></i></a>
                            <a href="/kuliner/show/{{ $item->id }}" class="link-details" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4>{{ $item->nama_kuliner }}</h4>
                            <p>{{ $item->deskripsi_kuliner }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="pagination justify-content-center ">
            {{ $data->links() }}
        </div>

</section>

@include('footer')
