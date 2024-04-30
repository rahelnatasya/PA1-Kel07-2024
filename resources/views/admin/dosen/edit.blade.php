@extends('admin.master')

@section('title')
    Edit dosen Activity
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.dosen.update', $dosen->id) }}" method="post" enctype="multipart/form-data">
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
                            <img src="{{ asset('aset/img/' . $dosen->gambar) }}" alt="{{ $dosen->gambar }}" width="200">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama Dosen:</label>
                            <input type="text" class="form-control" id="nama" name="nama" value="{{ $dosen->nama }}">
                            @error('nama')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="pendidikan">Pendidikan Dosen :</label>
                            <textarea class="form-control" id="pendidikan" name="pendidikan" rows="3">{{ $dosen->pendidikan }}</textarea>
                            @error('pendidikan')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN :</label>
                            <input type="text" class="form-control" id="nidn" name="nidn" value="{{ $dosen->nidn }}">
                            @error('nidn')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="role">Role :</label>
                            <input type="text" class="form-control" id="role" name="role" value="{{ $dosen->role }}">
                            @error('role')
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
