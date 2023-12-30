@extends('layout.be.template')
@section('title', 'Tambah Guru/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Tambah Guru</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Error!</strong> <br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="image">Gambar</label>
                                <input type="file" name="image" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="">Nip</label>
                                <input type="number" name="nip" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Guru</label>
                                <input type="text" name="nama_guru" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">No HP</label>
                                <input type="number" name="no_hp" class="form-control">
                            </div>
                            <div class="mb-3">
                                <select name="jk" class="form-select">
                                    <option value="" disabled selected>-- Pilih Jenis Kelamin --</option>
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Mapel</label>
                                <select name="mata_pelajaran" id="" class="form-select">
                                    <option value="" disabled selected>-- Pilih Mapel --</option>
                                    @foreach ($data_mapel as $row)
                                        <option value="{{ $row->id }}">{{ $row->nama_matapelajaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('guru.index') }}" class="btn btn-danger">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
