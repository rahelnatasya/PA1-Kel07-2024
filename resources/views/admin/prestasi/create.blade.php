@extends('admin.master')

@section('title')
    Create Prestasi Mahasiswa
@endsection


@section('content')
    <div class="section-body">
        <form action="{{ route('admin.prestasi.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="jenisprestasi">Jenis Prestasi: </label>
                                <input type="text" class="form-control" id="jenisprestasi" name="jenisprestasi"
                                    placeholder="Contoh: MBKM">
                                @error('jenisprestasi')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="nama">Nama Mahasiswa: </label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    placeholder="Masukkan nama mahasiswa">
                                @error('nama')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi">Deskripsi Prestasi : </label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi"
                                rows="5" style="height: 150px; placeholder="">
                                @error('deskripsi')
                                    <span class="text-danger mt-5">{{ $message }}</span>
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
