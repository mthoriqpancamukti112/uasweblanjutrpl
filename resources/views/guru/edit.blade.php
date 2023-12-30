@extends('layout.be.template')
@section('title', 'Edit Guru/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Guru</div>
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

                        <form action="{{ route('guru.update', $guru->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Gambar</label>
                                <input type="file" name="image" class="form-control">
                                <img src="/images_guru/{{ $guru->image }}" width="300px">
                            </div>
                            <div class="mb-3">
                                <label>Nip</label>
                                <input type="number" name="nip" class="form-control" value="{{ $guru->nip }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Guru</label>
                                <input type="text" name="nama_guru" class="form-control" value="{{ $guru->nama_guru }}">
                            </div>
                            <div class="mb-3">
                                <label for="">No HP</label>
                                <input type="number" name="no_hp" class="form-control" value="{{ $guru->no_hp }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-select">
                                    <option disabled value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ $guru->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $guru->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Mapel</label>
                                <select name="mata_pelajaran" id="" class="form-select">
                                    <option disabled value="">-- Pilih Mapel --</option>
                                    @foreach ($data_mapel as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $guru->mapel->id == $row->id ? 'selected' : '' }}>
                                            {{ $row->nama_matapelajaran }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="{{ $guru->alamat }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $guru->username }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('guru.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
