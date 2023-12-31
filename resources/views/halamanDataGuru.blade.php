@extends('layout.fe.template')
@section('title', 'Data Guru - SMAN 7 Mataram')
@section('content')
    <style>
        .konten-container {
            padding: 20px;
        }
    </style>
    <div class="konten-container">

        <h3 class="text-center">
            Data Guru
        </h3>
        <hr class="mx-auto" style="width: 50%; border-top: 2px solid #0066ff;">
        <br>
        <div class="container px-1 mt-1">
            <!-- Tambahkan form pencarian di atas tabel -->
            <form action="{{ route('halamanDataGuru') }}" method="GET" class="mb-3">
                <div class="input-group">
                    <input type="text" name="cari" value="{{ $request->cari }}" class="form-control"
                        placeholder="Cari berdasarkan nama guru...">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr style="text-align: center; font-size: 14px">
                                <th scope="col">No</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Nip</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Jenis kelamin</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Username</th>
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
                                    <td>{{ $row->jk }}</td>
                                    <td>{{ $row->mapel?->nama_matapelajaran }}</td>
                                    <td>{{ $row->alamat }}</td>
                                    <td>{{ $row->username }}</td>
                                </tr>
                            @empty
                                <div class="alert alert-danger">
                                    Guru belum ada.
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
