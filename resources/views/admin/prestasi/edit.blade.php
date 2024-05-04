@extends('admin.master')

@section('title')
    Prestasi Mahasiswa
@endsection

@section('subtitle')
    Form Edit
@endsection

@section('content')
        <form action="{{ route('admin.prestasi.update', $prestasi->id) }}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="jenisprestasi">Jenis Prestasi</label>
            <input type="text" class="form-control" id="jenisprestasi" name="jenisprestasi" value="{{ $prestasi->jenisprestasi }}"
                required>
        </div>
        <div class="form-group">
            <label for="nama">Nama Mahasiswa: </label>
            <textarea class="form-control" id="nama" name="nama" required>{{ $prestasi->nama }}</textarea>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi Prestasi: </label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" rows="10"  value="{{ $prestasi->deskripsi }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
        <a href="{{ route('admin.prestasi.index') }}" class="btn btn-warning" id="btn-batal">Batal</a>
    </form>
@endsection

@section('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: 200px;
        }
    </style>
@endsection

{{-- @section('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/30.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#nama'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
