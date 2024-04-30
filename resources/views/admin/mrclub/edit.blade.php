@extends('admin.master')

@section('title')
    Edit MR CLub
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.mrclub.update', $mrclub->id) }}" method="post" enctype="multipart/form-data">
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
                            <img src="{{ asset('aset/img/' . $mrclub->gambar) }}" alt="{{ $mrclub->gambar }}" width="200">
                        </div>
                        <div class="form-group mb-3">
                            <label for="judul">Nama Club :</label>
                            <input type="text" class="form-control" id="judul" name="judul" value="{{ $mrclub->judul }}">
                            @error('judul')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi :</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $mrclub->deskripsi }}</textarea>
                            @error('deskripsi')
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
