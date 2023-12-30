@extends('layout.be.template')
@section('title', 'Edit Siswa/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Siswa</div>
                    <div class="card-body">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('siswa.update', $siswa->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>NISN</label>
                                <input type="number" name="nisn" class="form-control" value="{{ $siswa->nisn }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control"
                                    value="{{ $siswa->nama_siswa }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Kota</label>
                                <input type="text" name="kota" class="form-control" value="{{ $siswa->kota }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <select name="jk" class="form-select">
                                    <option disabled value="">-- Pilih Jenis Kelamin --</option>
                                    <option value="L" {{ $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                                    <option value="P" {{ $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Agama</label>
                                <input type="text" name="agama" class="form-control" value="{{ $siswa->agama }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="" class="form-select">
                                    <option disabled value="">-- Pilih Jurusan --</option>
                                    @foreach ($data_jurusan as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $siswa->jurusan == $row->id ? 'selected' : '' }}>
                                            {{ $row->nama_jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Kelas</label>
                                <select name="kelas" id="" class="form-select">
                                    <option disabled value="">-- Pilih Kelas --</option>
                                    @foreach ($data_kelas as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $siswa->kelas == $row->id ? 'selected' : '' }}>
                                            {{ $row->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="{{ $siswa->username }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('siswa.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
