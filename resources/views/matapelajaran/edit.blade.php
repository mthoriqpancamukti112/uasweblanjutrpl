@extends('layout.be.template')
@section('title', 'Edit Mata Pelajaran/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Mata Pelajaran
                    </div>
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

                        <form action="{{ route('mapel.update', $mapel->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Nama Mata Pelajaran</label>
                                <input type="text" name="nama_matapelajaran" class="form-control"
                                    value="{{ $mapel->nama_matapelajaran }}">
                            </div>
                            <div class="mb-3">
                                <label for="">Jurusan</label>
                                <select name="jurusan" id="" class="form-select">
                                    <option disabled value="">-- Pilih Jurusan --</option>
                                    @foreach ($data_jurusan as $row)
                                        <option value="{{ $row->id }}"
                                            {{ $mapel->jurusan == $row->id ? 'selected' : '' }}>
                                            {{ $row->nama_jurusan }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('mapel.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
