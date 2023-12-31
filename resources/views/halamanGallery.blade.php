@extends('layout.fe.template')
@section('title', 'Data Gallery - SMAN 7 Mataram')
@section('content')
    <style>
        .konten-container {
            padding: 20px;
        }

        .custom-gallery img {
            margin-right: 40px;
            margin-bottom: 40px;
        }
    </style>
    <div class="konten-container">
        <h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
        <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
        <br>
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
@endsection
