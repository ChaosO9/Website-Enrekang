<!-- Vendor CSS Files -->
<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{ url('assets/css/style.css') }}" rel="stylesheet">

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            {{-- <img src="logo.png" alt="logo" width="130" class="img-thumbnail"> --}}
            {{-- <h1><a href="index.html">Lumia</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="index.html"><img src="{{ url('logo.png') }}" alt="" class="img-fluid"></a>
        </div>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="{{ route('home') }}">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Destinasi</a></li>
                <li><a class="nav-link scrollto" href="{{ route('wisata.tampil') }}">Wisata</a></li>
                <li><a class="nav-link scrollto" href="{{ route('kuliner.tampil') }}">Kuliner</a></li>
                <li><a class="nav-link scrollto" href="{{ route('tampil') }}">Penginapan</a></li>
                <li><a class="nav-link scrollto" href="{{ route('event') }}">Event</a></li>
                <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
            <form action="{{ Auth::check() ? route('login.logout') : route('login.tampil') }}"
                method="{{ Auth::check() ? 'POST' : 'GET' }}">
                @csrf
                <button class="login-button" type="submit">{{ Auth::check() ? 'Logout' : 'Login' }}</button>
            </form>
        </nav><!-- .navbar -->

        {{-- <div class="header-social-links d-flex align-items-center">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div> --}}

    </div>
</header><!-- End Header -->
