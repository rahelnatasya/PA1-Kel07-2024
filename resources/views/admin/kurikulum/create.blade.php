@extends('admin.master')

@section('title')
    Create Kurikulum
@endsection


@section('content')
    <div class="section-body">
        <form action="{{ Route('admin.kurikulum.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" id="semester" name="semester"
                                    placeholder="Contoh: Semester 1">
                                @error('semester')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="sks">Jumlah SKS</label>
                                <input type="number" class="form-control" id="sks" name="sks"
                                    placeholder="Masukkan Jumlah SKS">
                                @error('sks')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="course_code">Kode Matakuliah</label>
                                <input type="text" class="form-control" id="kode" name="kode"
                                    placeholder="Contoh: MK101">
                                @error('kode')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="course_name">Nama Matakuliah</label>
                                <textarea class="form-control" id="nama" name="nama" rows="3"
                                    placeholder="Contoh : DASPRO"></textarea>
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
