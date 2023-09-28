<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="dist-front/css/main.css">
    <link rel="icon" href="dist-front/img/logolabitech.png">
    <script src="https://kit.fontawesome.com/30c68318e6.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand ms-md-5 fw-semibold" href="#">Labitech</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link me-md-5 me-0" aria-current="page" href="/">Home</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link me-md-5 me-0 dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kita
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/visimisi">Visi dan Misi</a></li>
                            <li><a class="dropdown-item" href="#">Aplikasi</a></li>
                            <li><a class="dropdown-item" href="#">Layanan Karir</a></li>
                            <li><a class="dropdown-item" href="/certificate">Certificate</a></li>
                        </ul>
                    </li>
                    <a class="nav-link me-md-5 me-0" href="#">Galeri</a>
                    <a class="nav-link me-md-5 me-0" href="#">Kemitraan</a>
                    <a class="nav-link me-md-5 me-0" href="#">About</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="section-content container-fluid p-0">
        @yield('container')
    </div>
    <footer class="container-fluid">
        <div class="row ps-md-5 pt-md-4 pb-md-4 pt-3 ps-4 pb-4 justify-content-center">
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-12">
                        <h5>Site Links</h5>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                            <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Blog</a></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                            <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Contact us</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="row">
                    <div class="col-12">
                        <h5>Useful Links</h5>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                            <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Labitech Popi Jakarta</a></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-chevron-right" style="color: #ffffff;"></i></div>
                            <div class="col-md-9 col-10 ps-md-2 ps-0"><a href="">Kemitraan</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-12 pt-md-0 pt-3">
                <div class="row">
                    <div class="col-12">
                        <h5>
                            Contact
                        </h5>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-location-dot" style="color: #ffffff"></i></div>
                            <div class="col-md-9 col-10 ps-md-3 ps-0">Jl. Rawa Jaya No 37, RT 8/ RW 4, Kec Duren Sawit, Jakarta Timur, DKI Jakarta, 13460</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-solid fa-phone" style="color: #ffffff;"></i></div>
                            <div class="col-9 ps-md-3 ps-0">0816 - 2626 - 19</div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="row pt-md-2">
                            <div class="col-1"><i class="fa-regular fa-envelope" style="color: #ffffff;"></i></i></div>
                            <div class="col-9 ps-md-3 ps-0">hrdlabitechjuara@gmail.com</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="container-fluid text-center" style="background-color: green; height: 3vh;">
        <p>&copy; 2023 |&nbsp; All Rights Reserved</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
