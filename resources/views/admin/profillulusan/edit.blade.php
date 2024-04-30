@extends('admin.master')

@section('title')
    Edit Profil Lulusan
@endsection

@section('content')
    <div class="section-body">
        <form action="{{ route('admin.profillulusan.update', ['profillulusan' => $profillulusan->id]) }}" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="judul">Nama Pekerjaan</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $profillulusan->judul }}">
                                @error('judul')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="jobtitle">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="jobtitle"
                                    value="{{ $profillulusan->jobtitle }}">
                                @error('jobtitle')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi"
                                    rows="3">{{ $profillulusan->deskripsi }}</textarea>
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
