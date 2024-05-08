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
            <label for="name">Jenis Prestasi</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $prestasi->name }}"
                required>
        </div>
        <div class="form-group">
            <label for="time_event">Waktu Pelaksanaan </label>
            <textarea class="form-control" id="time_event" name="time_event" required>{{ $prestasi->time_event }}</textarea>
        </div>
        <div class="form-group">
            <label for="achievement_level">Tingkat Prestasi</label>
            <select name="achievement_level" class="form-control" id="achievement_level" required>
                <option value="Lokal" {{ $prestasi->achievement_level == 'Lokal' ? 'selected' : '' }}>Lokal</option>
                <option value="Wilayah" {{ $prestasi->achievement_level == 'Wilayah' ? 'selected' : '' }}>Wilayah</option>
                <option value="Nasional" {{ $prestasi->achievement_level == 'Nasional' ? 'selected' : '' }}>Nasional</option>
                <option value="Internasional" {{ $prestasi->achievement_level == 'Internasional' ? 'selected' : '' }}>Internasional</option>
            </select>
        </div>       
        <div class="form-group">
            <label for="description">Prestasi yang dicapai: </label>
            <input type="text" class="form-control" id="description" name="description" rows="10"  value="{{ $prestasi->description }}"
                required>
        </div>
        <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan Prestasi Mahasiswa</button>
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
            .create(document.querySelector('#time_event'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
