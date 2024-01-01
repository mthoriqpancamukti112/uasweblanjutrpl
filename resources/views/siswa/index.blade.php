@extends('layout.be.template')
@section('title', 'Data Siswa/')
@section('content')

    <link rel="stylesheet" href="/beckend/assets/css/bootstrap.min.css">
    <style>
        .table-container {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>

    <div class="container px-1 mt-1">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus me-2"></i>Tambah Data
                </a>

                <!-- Tambahkan form pencarian di atas tabel -->
                <form action="{{ route('siswa.index') }}" method="GET" class="mb-3">
                    <div class="input-group">
                        <input type="text" name="cari" value="{{ $request->cari }}" class="form-control"
                            placeholder="Cari berdasarkan nama siswa...">
                        <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                </form>

                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black; font-weight: bold">
                        Data Siswa</div>
                    <div class="card-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <div class="table-container">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr style="text-align: center; font-size: 14px">
                                        <th>No</th>
                                        <th>NISN</th>
                                        <th>Nama Siswa</th>
                                        <th>Kota</th>
                                        <th>Jenis kelamin</th>
                                        <th>Agama</th>
                                        <th>Jurusan</th>
                                        <th>Kelas</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $row)
                                        <tr style="text-align: center; font-size: 14px">
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $row->nisn }}</td>
                                            <td>{{ $row->nama_siswa }}</td>
                                            <td>{{ $row->kota }}</td>
                                            <td>{{ $row->jk }}</td>
                                            <td>{{ $row->agama }}</td>
                                            <td>{{ $row->jurusann?->nama_jurusan }}</td>
                                            <td>{{ $row->kelass?->nama_kelas }}</td>
                                            <td>{{ $row->username }}</td>
                                            <td>
                                                <form method="POST" action="{{ route('siswa.destroy', $row->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-transparent"
                                                        onclick="return confirm('Apakah anda yakin ingin hapus?');">
                                                        <i class="bi bi-trash" style="font-size: 20px; color: red"></i>
                                                    </button>
                                                    <a href="{{ route('siswa.edit', $row->id) }}"><i
                                                            class="fa-regular fa-pen-to-square"
                                                            style="font-size: 20px; color: green"></i></a>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <div class="alert alert-danger">
                                            Data siswa belum ada.
                                        </div>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
