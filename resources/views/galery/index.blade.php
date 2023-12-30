@extends('layout.be.template')
@section('title', 'Data Galery/')
@section('content')

    <link rel="stylesheet" href="/beckend/assets/css/bootstrap.min.css">


    <div class="container px-1 mt-1">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ route('galeri.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data Galery
                </a>

                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black; font-weight: bold">
                        Data Galery</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center; font-size: 14px">
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col" width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($data as $row)
                                    <tr style="text-align: center; font-size: 14px">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="/galery/{{ $row->image }}" width="100px" class="rounded"
                                                style="width: 100px">
                                        </td>
                                        <td>
                                            <form method="POST" action="{{ route('galeri.destroy', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-transparent"
                                                    onclick="return confirm('Apakah anda yakin ingin hapus?');">
                                                    <i class="bi bi-trash" style="font-size: 20px; color: red"></i>
                                                </button>
                                                <a href="{{ route('galeri.edit', $row->id) }}"><i
                                                        class="fa-regular fa-pen-to-square"
                                                        style="font-size: 20px; color: green"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Galery belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Gallery</h2>
            <!-- Gallery -->
            @forelse ($data as $row)
                <img src="/galery/{{ $row->image }}" class="rounded" width="100px" height="100px">

            @empty
                <div class="alert alert-danger">
                    Data Galery belum Tersedia.
                </div>
            @endforelse
            <!-- Gallery -->
        </div>
    </section>
@endsection
