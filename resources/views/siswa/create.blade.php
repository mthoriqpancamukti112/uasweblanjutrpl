@extends('layout.be.template')
@section('title', 'Tambah Siswa')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Tambah Siswa</div>
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

                        <form action="{{ route('siswa.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="">NISN</label>
                                <input type="number" name="nisn" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Nama Siswa</label>
                                <input type="text" name="nama_siswa" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Kota</label>
                                <input type="text" name="kota" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Jenis Kelamin</label>
                                <input type="text" name="jk" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Agama</label>
                                <input type="text" name="agama" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <input type="text" name="jurusan" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('siswa.index') }}" class="btn btn-danger">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
