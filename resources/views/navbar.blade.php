<!-- Vendor CSS Files -->

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <div class="logo me-auto">
            <img src="{{ url('LogoWeb.png') }}" alt="" class="img-fluid">
        </div>
        {{-- <nav id="navbar" class="navbar order-lg-0"> --}}
        <nav id="navbar_2" class="navbar order-last order-lg-0">
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
                    <a class="nav-link scrollto {{ request()->routeIs('penginapan.tampil') ? 'active' : '' }}"
                        href="{{ route('penginapan.tampil') }}">Penginapan</a>
                </li>
                <li>
                    <a class="nav-link scrollto {{ request()->routeIs('event') ? 'active' : '' }}"
                        href="{{ route('event') }}">Event</a>
                </li>
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
{{-- <script>
    // Event listener untuk menambahkan atau menghapus kelas "navbar-mobile"
    document.querySelector('.mobile-nav-toggle').addEventListener('click', function() {
        var navbar = document.querySelector('#navbar');
        navbar.classList.toggle('navbar-mobile');
    });
</script> --}}
