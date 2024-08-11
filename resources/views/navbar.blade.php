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
            <img src="{{ url('LogoWeb.png') }}" alt="" class="img-fluid">
        </div>
        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('home') ? 'active' : '' }}"
                        href="{{ route('home') }}">Home</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('wisata.tampil') ? 'active' : '' }}"
                        href="{{ route('wisata.tampil') }}">Wisata</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('kuliner.tampil') ? 'active' : '' }}"
                        href="{{ route('kuliner.tampil') }}">Kuliner</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('tampil') ? 'active' : '' }}"
                        href="{{ route('tampil') }}">Penginapan</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('event') ? 'active' : '' }}"
                        href="{{ route('event') }}">Event</a>
                </li>
                {{-- <li><a class="nav-link scrollto" href="#contact">Kontak</a></li> --}}
            </ul>

            <i class="bi bi-list mobile-nav-toggle"></i>
            <form action="{{ Auth::check() ? route('login.logout') : route('login.tampil') }}"
                method="{{ Auth::check() ? 'POST' : 'GET' }}">
                @csrf
                <button class="login-button" type="submit">{{ Auth::check() ? 'Logout' : 'Login' }}</button>
            </form>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->
