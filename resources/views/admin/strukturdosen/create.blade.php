@extends('admin.master')

@section('title')
    Create Struktur Dosen
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.strukturdosen.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="images">Pilih Gambar :</label>
                            <input type="file" class="form-control" id="images" name="images" value="{{ old('images') }}">
                            @error('images')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="name">Nama Dosen :</label>
                            <input type="text" class="form-control" id="name" name="name" >
                            @error('name')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="posisition">Posisi :</label>
                            <input type="text" class="form-control" id="posisition" name="posisition">
                            @error('posisition')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan Struktur Dosen</button>
        </div>
    </form>
</div>
@endsection
