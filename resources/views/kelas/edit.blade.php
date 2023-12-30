@extends('layout.be.template')
@section('title', 'Edit Kelas/')
@section('content')

    <div class="container px-1 mt-2">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="font-size: 20px; text-align: center; color: black">Edit Kelas</div>
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

                        <form action="{{ route('class.update', $class->id) }}" method="post">
                            @csrf
                            @method('patch')
                            <div class="mb-3">
                                <label>Nama Kelas</label>
                                <input type="text" name="nama_kelas" class="form-control"
                                    value="{{ $class->nama_kelas }}">
                            </div>
                            <input type="submit" value="Simpan" class="btn btn-success">
                            <a href="{{ route('class.index') }}" class="btn btn-warning">Batal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
