@extends('admin.master')

@section('title')
    Edit Laboratorium
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.laboratorium.update', $laboratorium->id) }}" method="post" enctype="multipart/form-data">
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
                            <img src="{{ asset('aset/img/' . $laboratorium->gambar) }}" alt="{{ $laboratorium->gambar }}" width="200">
                        </div>                        
                        <div class="form-group mb-3">
                            <label for="nama">Nama Laboratorium :</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $laboratorium->nama }}">
                            @error('nama')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="deskripsi">Deskripsi Laboratorium :</label>
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3">{{ $laboratorium->deskripsi }}</textarea>
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
