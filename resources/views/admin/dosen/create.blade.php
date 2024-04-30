@extends('admin.master')

@section('title')
    Create Dosen & Staff
@endsection

@section('content')
<div class="section-body">
    <form action="{{ route('admin.dosen.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label for="gambar">Masukkan foto dosen :</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" value="{{ old('gambar') }}">
                            @error('gambar')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nama">Nama Dosen:</label>
                            <input type="text" class="form-control" id="nama" name="nama" >
                            @error('nama')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="pendidikan">Pendidikan dosen :</label>
                            <textarea class="form-control" id="pendidikan" name="pendidikan"  rows="3">{{ old('pendidikan') }}</textarea>
                            @error('pendidikan')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="nidn">NIDN :</label>
                            <textarea class="form-control" id="nidn" name="nidn"></textarea>
                            @error('nidn')
                                <span class="text-danger mt-2">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="role">Role :</label>
                            <textarea class="form-control" id="role" name="role"></textarea>
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
