@extends('layout.be.template')
@section('title', 'Edit Jurusan')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Jurusan</div>
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

                        <form action="{{ route('jurusan.update', $jurusan->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Nama Jurusan</label>
                                <input type="text" name="nama_jurusan" class="form-control"
                                    value="{{ $jurusan->nama_jurusan }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('jurusan.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
