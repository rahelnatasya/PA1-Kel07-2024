@extends('admin.master')

@section('title')
    Edit Asrama
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.asrama.update', $asrama->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="gambar">Pilih Gambar :</label>
                            <input type="file" class="form-control" id="gambar" name="gambar">
                            @error('gambar')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                            <img src="{{ asset('aset/img/' . $asrama->gambar) }}" alt="{{ $asrama->gambar }}" width="200">
                        </div>
                        <div class="form-group mb-3">
                            <label for="judul">Nama Asrama :</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $asrama->judul }}">
                            @error('nama')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>
@endsection
