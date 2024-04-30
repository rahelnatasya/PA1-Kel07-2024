@extends('admin.master')

@section('title')
    Create Profil Lulusan
@endsection


@section('content')
    <div class="section-body">
        <form action="{{ Route('admin.profillulusan.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="judul">Nama Pekerjaan</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    placeholder="Contoh: Market Engineer">
                                @error('judul')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="jobtitle">Job Title</label>
                                <input type="text" class="form-control" id="jobtitle" name="jobtitle"
                                    placeholder="Contoh: Sales Engineer ">
                                @error('jobtitle')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"
                                    placeholder=""></textarea>
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
