@extends('admin.master')

@section('title')
    Create Ruang Seminar
@endsection

@section('content')
<div class="section-body">
    <form action="{{ Route('admin.ruangseminar.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
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

