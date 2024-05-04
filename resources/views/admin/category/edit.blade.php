@extends('admin.master')

@section('title')
    Edit Visi Misi Tujuan
@endsection

@section('content')
    <div class="section-body">
        <form action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="post">
            @method('put')
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="category">Kategori Fasilitas</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    value="{{ $category->category }}">
                                @error('category')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi Fasilitas</label>
                                <textarea class="form-control" id="description" name="description"
                                    rows="3">{{ $category->description }}</textarea>
                                @error('description')
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
