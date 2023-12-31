@extends('layout.fe.template')
@section('title', 'SMAN 7 Mataram - Mendidik Untuk Maju')
@section('content')
    <style>
        .custom-gallery img {
            margin-right: 40px;
            margin-bottom: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .content {
            display: flex;
            align-items: center;

        }

        .image-container {
            flex: 0 0 auto;
            margin-right: 80px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .text-container {
            flex: 1;
        }

        #about {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .faded-text {
            color: #808080;
        }
    </style>

    </head>

    <body>

        <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/gambar 1.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h5>SMAN 7 Mataram</h5>
                        <p>Mendidik Untuk Maju</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/gambar 2.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h5>SMAN 7 Mataram</h5>
                        <p>Mendidik Untuk Maju</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/gambar 3.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block">
                        <h5>SMAN 7 Mataram</h5>
                        <p>Mendidik Untuk Maju</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- ======= Sambutan Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">Sambutan Kepala Sekolah</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1">Pengantar Kepala SMA Negeri 7 Mataram</p>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
                <div class="row flex-lg-row pt-5 pb-5">

                    <div class="col-lg-5 align-items-center text-center">
                        <img style="width: 300px; height: 400px;" src="/frontend/images/kepala-sekolah.jpg" class="mx-auto"
                            alt="">
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="container faded-text">
                            <h3>Assalamu’alaikum Warahmatullah Wabarakatuh</h3>
                            <p style="text-align: justify">
                                &emsp;&emsp;Alhamdulillah puji syukur kehadirat Allah Swt, Tuhan Yang
                                Mahakuasa yang telah
                                melimpahkan karunia-Nya sehingga penyusunan Profil SMA Negeri 7 Mataram baik dalam
                                bentuk tulisan maupun dalam bentuk video tahun 2022 ini dapat diselesaikan, tanpa ada
                                kendala yang berarti. Tidak lupa ucapan terima kasih disampaikan kepada semua pihak yang
                                telah memberikan dukungan, bantuan, maupun masukan yang sangat berarti dan berharga demi
                                selesainya pembuatan Profil SMA Negeri 7 Mataram tepat waktu.
                            </p>
                            <p style="text-align: justify">
                                &emsp;&emsp;Profil SMA Negeri 7 Mataram ini disusun dengan tujuan untuk memberikan
                                gambaran bagi
                                dunia Pendidikan dan juga dunia Usaha dan lainnya tentang visi dan misi sekolah kedepan,
                                dengan harapan SMA Negeri 7 Mataram kedepan bisa bersaing dengan lembaga-lembaga
                                pendidikan yang sudah maju baik yang ada di NTB maupun yang lain yang ada di luar NTB.
                            </p>
                            <p style="text-align: justify">
                                &emsp;&emsp;Semoga Profil ini dapat memberikan manfaat yang sangat berarti terutama bagi
                                warga
                                sekolah dan juga istansi-istansi terkait khususnya dunia pendidikan, dalam rangka upaya
                                memberikan gambaran mengenai apa yang menjadi visi dan misi SMA Negeri 7 Mataram
                                kedepan.
                            </p>
                            <h3>Waalaikumussalam Warahmatullah Wabaraakatuh.</h3>
                            <p>Mataram, Januari 2022</p>
                            <br>
                            <p>Kepala,</p>
                            <h3>Achmad Hudri, S.Pd. MM</h3>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div
                                class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $jumlahGuru }}</h3>
                                    <p class="fs-5 text-white">Guru</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $jumlahSiswa }}</h3>
                                    <p class="fs-5 text-white">Siswa</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $jumlahMapel }}</h3>
                                    <p class="fs-5 text-white">Mata Pelajaran</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $jumlahKelas }}</h3>
                                    <p class="fs-5 text-white">Ruang Kelas</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Artikel dan Info Terkait</h2>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/20231229_211008.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pelaksanaan Psikotes Untuk
                                    Mengetahui Minat dan Bakat Siswa
                                    Kelas X dalam Menjalankan Kurikulum Merdeka</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/20231229_211034.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">PENGUMUMAN KELULUSAN KELAS XII TAHUN 2023</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/WhatsApp-Image-2023-01-20-at-08.25.19-1024x768.jpeg"
                                    class="img-fluid" width="400px" height="200px" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">SMAN 7 MATARAM PEDULI STUNTING</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
                <!-- Gallery -->
                <div class="text-center custom-gallery">
                    @forelse ($data as $row)
                        <img src="/galery/{{ $row->image }}" class="rounded" width="300px" height="300px">
                    @empty
                        <div class="alert alert-danger">
                            Data Galery belum Tersedia.
                        </div>
                    @endforelse
                </div>
                <!-- Gallery -->
            </div>
        </section>
    </body>
@endsection
