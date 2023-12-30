@extends('layout.be.template')
@section('title', 'Data Guru')
@section('content')

    <link rel="stylesheet" href="/beckend/assets/css/bootstrap.min.css">


    <div class="container px-1 mt-1">
        <div class="row">
            <div class="col-md-12">

                <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">
                    <i class="fas fa-plus"></i>Tambah Data Guru
                </a>

                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black; font-weight: bold">
                        Data Guru</div>
                    <div class="card-body">

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr style="text-align: center; font-size: 14px">
                                    <th scope="col">No</th>
                                    <th scope="col">Gambar</th>
                                    <th scope="col">Nip</th>
                                    <th scope="col">Nama Guru</th>
                                    <th scope="col">No HP</th>
                                    <th scope="col">Jenis kelamin</th>
                                    <th scope="col">Mapel</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Username</th>
                                    <th scope="col" width="150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                @forelse ($data as $row)
                                    <tr style="text-align: center; font-size: 14px">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img src="/images_guru/{{ $row->image }}" width="100px" class="rounded"
                                                style="width: 100px">
                                        </td>
                                        <td>{{ $row->nip }}</td>
                                        <td>{{ $row->nama_guru }}</td>
                                        <td>{{ $row->no_hp }}</td>
                                        <td>{{ $row->jk }}</td>
                                        <td>{{ $row->mata_pelajaran }}</td>
                                        <td>{{ $row->alamat }}</td>
                                        <td>{{ $row->username }}</td>
                                        <td>
                                            <form method="POST" action="{{ route('guru.destroy', $row->id) }}">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-transparent"
                                                    onclick="return confirm('Apakah anda yakin ingin hapus?');">
                                                    <i class="bi bi-trash" style="font-size: 20px; color: red"></i>
                                                </button>
                                                <a href="{{ route('guru.edit', $row->id) }}"><i
                                                        class="fa-regular fa-pen-to-square"
                                                        style="font-size: 20px; color: green"></i></a>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data Guru belum Tersedia.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
