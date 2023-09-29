<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-md-5 fw-semibold" href="/">Labitech</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link me-md-5 me-0" aria-current="page" href="{{route('home')}}">Home</a>
                <li class="nav-item dropdown">
                    <a class="nav-link me-md-5 me-0 dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kita
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{route('visimisi')}}">Visi dan Misi</a></li>
                        <li><a class="dropdown-item" href="/aplikasi">Aplikasi</a></li>
                        <li><a class="dropdown-item" href="/layanan-karir">Layanan Karir</a></li>
                        <li><a class="dropdown-item" href="/certificate">Certificate</a></li>
                    </ul>
                </li>
                <a class="nav-link me-md-5 me-0" href="{{route('gallery')}}">Galeri</a>
                <a class="nav-link me-md-5 me-0" href="#">Kemitraan</a>
            </div>
        </div>
    </div>
</nav>