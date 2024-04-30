@extends('admin.master')

@section('title')
    Create Ruang Kelas
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.ruang.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="ruang">Kategori Ruang : </label>
                            <select name="ruang" class="form-control">
                                <option value="Ruang Kelas">Ruang Kelas</option>
                                <option value="Ruang Baca">Ruang Baca</option>
                                <option value="Ruang Seminar">Ruang Seminar</option>
                                <option value="Smart Room">Smart Room</option>
                            </select>
                            @error('ruang')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                            <label for="gambar">Pilih Gambar : </label>
                            <input type="file" class="form-control" id="gambar" name="gambar" value="{{ old('gambar')}}">
                            @error('gambar')
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
