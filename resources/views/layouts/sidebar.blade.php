<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <img id="logo" src="{{ asset('logo.png') }}" alt="logo" width="130">
        <div class="sidebar-brand-icon">
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('wisata2') }}">
            <i class="fas fa-globe"></i>
            <span>Wisata</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kuliner2') }}">
            <i class="fas fa-globe"></i>
            <span>Kuliner</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('penginapan2') }}">
            <i class="fas fa-globe"></i>
            <span>Penginapan</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('event2') }}">
            <i class="fas fa-globe"></i>
            <span>Event</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('saran2') }}">
            <i class="fas fa-globe"></i>
            <span>Saran</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori') }}">
            <i class="fas fa-globe"></i>
            <span>Kategori</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('fasilitas') }}">
            <i class="fas fa-globe"></i>
            <span>Fasilitas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('galeri') }}">
            <i class="fas fa-globe"></i>
            <span>Galeri</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->


</ul>
