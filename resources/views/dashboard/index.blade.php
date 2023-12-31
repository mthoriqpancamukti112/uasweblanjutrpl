@extends('layout.be.template')
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">
            <div class="col-md-3">
                <div class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $jumlahGuru }}</h3>
                        <p class="fs-5 text-white">Guru</p>
                    </div>
                    <i class="fa-solid fa-chalkboard-user" style="font-size: 50px; color: white"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-success shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $jumlahSiswa }}</h3>
                        <p class="fs-5 text-white">Siswa</p>
                    </div>
                    <i class="fa-solid fa-users" style="font-size: 50px; color: white"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-warning shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $jumlahMapel }}</h3>
                        <p class="fs-5 text-white">Mapel</p>
                    </div>
                    <i class="fa-regular fa-file" style="font-size: 50px; color: white"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-danger shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2 text-white">{{ $jumlahKelas }}</h3>
                        <p class="fs-5 text-white">Kelas</p>
                    </div>
                    <i class="fa-solid fa-list" style="font-size: 50px; color: white"></i>
                </div>
            </div>
        </div>

        <section class="section dashboard" style="margin-top: 50px">
            Selamat Datang M Thoriq Panca Mukti
        </section>
    @endsection
