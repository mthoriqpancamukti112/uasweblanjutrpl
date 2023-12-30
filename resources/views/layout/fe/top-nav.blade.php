<header>
    <section id="topbar"
        class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
        <div class="container">
            <div class="row">
                <div style="text-align: center">
                    <a href="" class="me-4 text-reset">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="bi bi-google"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a href="" class="me-4 text-reset">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <h2 class="fw-bold  mb-2 mb-lg-0 mb-sm-0">SMAN 7 Mataram</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/halaman') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profil') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('halamanDataGuru') }}">Guru</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('halamanGallery') }}">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/login') }}">
                            <i class="bi bi-person "></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->
</header>
