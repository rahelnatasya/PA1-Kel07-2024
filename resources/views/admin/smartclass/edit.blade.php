@extends('admin.master')

@section('title')
    Smart Class
@endsection

@section('subtitle')
    Form Edit
@endsection

@section('content')
    <div class="section-body">
        <form action="{{ route('admin.smartclass.update', ['id' => $galeri->id]) }}"
            method="post" enctype="multipart/form-data">
          @method('put')
          @csrf
          <div class="form-group">
              <label for="gambar">Gambar</label>
              <input type="file" class="form-control" id="gambar" name="gambar">
          </div>
          <button type="submit" class="btn btn-primary" id="btn-simpan">Simpan</button>
          <a href="{{ route('admin.smartclass.index') }}" class="btn btn-warning" id="btn-batal">Batal</a>
      </form>      
    </div>
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
            .create(document.querySelector('#description'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection --}}
