@extends('admin.master')

@section('title')
    Create Kategori
@endsection


@section('content')
    <div class="section-body">
        <form action="{{ Route('admin.category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="category">Kategori Fasilitas</label>
                                <input type="text" id="category" name="category" class="form-control">
                                </select>
                                @error('category')
                                    <span class="text-danger mt-2">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>                        
                            <div class="form-group">
                                <label for="description">Deskripsi Fasilitas</label>
                                <textarea class="form-control" id="description" name="description" rows="3"
                                    placeholder=""></textarea>
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
